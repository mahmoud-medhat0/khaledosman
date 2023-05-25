<?php

namespace App\Http\Middleware;

use App\Models\Code;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HasAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $codes = Code::where('student_id',auth()->user()->id)->get();
        foreach ($codes as $code) {
            $lessonId = $code->lesson_id;
            $lessonIds[] = $lessonId;
        }
        $lesson = explode('/',$request->getPathInfo())[2];
        if (in_array($lesson,$lessonIds)){
            return $next($request);
        }else{
            $message = 'غير مسموح لك بالمشاهدة';
            return response()->view('message', compact('message'));
        }
    }
}
