<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    /* ========== TERMS ========== */
    public function terms_en() { return $this->render('terms', 'en'); }
    public function terms_es() { return $this->render('terms', 'es'); }

    /* ========== PRIVACY ========== */
    public function privacy_en() { return $this->render('privacy', 'en'); }
    public function privacy_es() { return $this->render('privacy', 'es'); }

    /* ---------- helper ---------- */
    private function render(string $view, string $locale)
    {
        app()->setLocale($locale);
        $sections = trans("legal.$view.sections");
        $title    = trans("legal.$view.title");

        return view("legal.$view", compact('title', 'sections'));
    }
}