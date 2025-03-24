<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        // Validar los datos recibidos
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            // Si es una petición AJAX, devolver respuesta JSON
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false, 
                    'message' => 'Por favor, verifica los campos del formulario.',
                    'errors' => $validator->errors()
                ], 422);
            }
            
            // Si no es AJAX, redireccionar con errores
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Datos que se enviarán al correo
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'company' => $request->company,
                'subject' => $request->subject,
                'message' => $request->message
            ];

            // Enviar el correo
            Mail::to('kayvazquez65@gmail.com')->send(new ContactFormMail($data));
            
            // Si es una petición AJAX, devolver respuesta JSON
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => '¡Mensaje enviado con éxito! Me pondre en contacto contigo pronto.'
                ]);
            }
            
            // Si no es AJAX, redireccionar con mensaje de éxito
            return redirect()->back()->with('success', '¡Mensaje enviado con éxito! Me pondre en contacto contigo pronto.');
            
        } catch (\Exception $e) {
            // Si es una petición AJAX, devolver respuesta JSON
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Hubo un error al enviar el mensaje. Por favor intenta nuevamente más tarde.',
                    'error' => $e->getMessage()
                ], 500);
            }
            
            // Si no es AJAX, redireccionar con mensaje de error
            return redirect()->back()
                ->with('error', 'Hubo un error al enviar el mensaje. Por favor intenta nuevamente más tarde.')
                ->withInput();
        }
    }
}