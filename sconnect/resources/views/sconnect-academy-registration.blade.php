@extends('pages.layout')

@section('title', 'Inscription - Sconnect Academy')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/sconnect-academy-forms.css') }}">
    <style>
        /* Conteneur principal */
        .academy-registration {
            padding: 3rem 1rem;
            background-color: #f8f9fa;
        }
        
        .academy-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        @media (max-width: 768px) {
            .academy-registration {
                padding: 2rem 0.5rem;
            }
        }
        
        @media (max-width: 480px) {
            .academy-registration {
                padding: 1.5rem 0.25rem;
            }
        }
        
        .registration-container {
            display: flex;
            flex-wrap: wrap;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin-top: 2rem;
        }

        /* En-tête du formulaire */
        .form-header {
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 1rem;
        }

        .form-header h2 {
            color: #00AAE4;
            margin-bottom: 0.5rem;
            font-size: 2.2rem;
            font-weight: 700;
        }

        .form-header p {
            color: #666;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .form-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: #00AAE4;
            border-radius: 3px;
        }
        
        /* Image du formulaire */
        .registration-image {
            flex: 1 1 300px;
            position: relative;
            overflow: hidden;
        }
        
        .registration-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        
        /* Formulaire */
        .registration-form {
            flex: 2 1 500px;
            padding: 2rem;
            width: 100%;
        }
        
        @media (max-width: 768px) {
            .registration-form {
                padding: 1.5rem;
            }
        }
        
        @media (max-width: 480px) {
            .registration-form {
                padding: 1rem;
            }
        }
        
        .form-title {
            margin-bottom: 1.5rem;
        }
        
        .form-title h3 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }
        
        .form-title p {
            color: #666;
            font-size: 0.9rem;
        }
        
        /* Indicateurs d'étapes */
        .step-progress {
            display: flex;
            justify-content: space-between;
            margin: 2rem 0;
            position: relative;
            padding: 0 10px;
            width: 100%;
        }
        
        @media (max-width: 576px) {
            .step-progress {
                margin: 1.5rem 0;
                padding: 0 5px;
            }
        }
        
        .step-progress::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 30px;
            width: calc(100% - 60px);
            height: 3px;
            background-color: #e0e0e0;
            z-index: 1;
        }
        
        .step-indicator {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: #fff;
            border: 2px solid #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 2;
            transition: all 0.3s ease;
        }
        
        @media (max-width: 576px) {
            .step-indicator {
                width: 28px;
                height: 28px;
            }
        }
        
        @media (max-width: 400px) {
            .step-indicator {
                width: 24px;
                height: 24px;
            }
        }
        
        .step-number {
            font-weight: 600;
            color: #999;
            font-size: 14px;
        }
        
        .step-indicator.active {
            border-color: #00AAE4;
            box-shadow: 0 0 0 3px rgba(0, 170, 228, 0.2);
        }
        
        .step-indicator.active .step-number {
            color: #00AAE4;
        }
        
        .step-indicator.completed {
            background-color: #00AAE4;
            border-color: #00AAE4;
        }
        
        .step-indicator.completed .step-number {
            color: #fff;
        }
        
        .step-label {
            position: absolute;
            top: 38px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.85rem;
            color: #666;
            white-space: nowrap;
            font-weight: 500;
            margin-top: 5px;
        }
        
        @media (max-width: 576px) {
            .step-label {
                font-size: 0.75rem;
                top: 34px;
            }
        }
        
        @media (max-width: 400px) {
            .step-label {
                font-size: 0.7rem;
                top: 30px;
            }
        }
        
        .step-indicator.active .step-label {
            color: #00AAE4;
            font-weight: 600;
        }

        /* Sections du formulaire */
        .form-section {
            display: none;
            animation: fadeIn 0.5s;
            margin-top: 1.5rem;
        }
        
        .form-section.active {
            display: block;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .form-section h4 {
            margin-top: 1.5rem;
            margin-bottom: 1.2rem;
            color: #333;
            font-size: 1.2rem;
            font-weight: 600;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 0.8rem;
            position: relative;
        }
        
        .form-section h4::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 60px;
            height: 2px;
            background-color: #00AAE4;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
            width: 100%;
        }
        
        @media (max-width: 576px) {
            .form-row {
                margin-right: -10px;
                margin-left: -10px;
            }
        }

        .form-group {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 15px;
            margin-bottom: 1.2rem;
            position: relative;
        }

        @media (min-width: 768px) {
            .form-group {
                flex: 0 0 50%;
                max-width: 50%;
            }
            
            .form-group.full-width {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        
        @media (max-width: 576px) {
            .form-group {
                padding: 0 10px;
                margin-bottom: 1rem;
            }
        }
        
        @media (max-width: 400px) {
            .form-group {
                padding: 0 8px;
                margin-bottom: 0.8rem;
            }
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #444;
            font-size: 0.95rem;
        }
        
        @media (max-width: 768px) {
            .form-group label {
                margin-bottom: 0.45rem;
                font-size: 0.9rem;
            }
        }
        
        @media (max-width: 576px) {
            .form-group label {
                margin-bottom: 0.4rem;
                font-size: 0.85rem;
            }
        }
        
        @media (max-width: 400px) {
            .form-group label {
                margin-bottom: 0.35rem;
                font-size: 0.8rem;
            }
        }
        
        .required-field::after {
            content: '*';
            color: #dc3545;
            margin-left: 3px;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.65rem 0.85rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 6px;
            transition: all 0.2s ease-in-out;
        }
        
        @media (max-width: 768px) {
            .form-control {
                padding: 0.6rem 0.8rem;
                font-size: 0.95rem;
            }
        }
        
        @media (max-width: 576px) {
            .form-control {
                padding: 0.55rem 0.75rem;
                font-size: 0.9rem;
            }
        }
        
        @media (max-width: 400px) {
            .form-control {
                padding: 0.5rem 0.7rem;
                font-size: 0.85rem;
                height: auto;
            }
        }
        
        .form-control:focus {
            border-color: #00AAE4;
            outline: 0;
            box-shadow: 0 0 0 3px rgba(0, 170, 228, 0.15);
        }
        
        .form-control.is-invalid {
            border-color: #dc3545;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
            box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.15);
        }
        
        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875rem;
        }
        
        .form-control.is-invalid ~ .invalid-feedback {
            display: block;
        }
        
        /* Boutons de navigation */
        .form-navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #eee;
            width: 100%;
        }
        
        @media (max-width: 576px) {
            .form-navigation {
                margin-top: 1.5rem;
                padding-top: 1.2rem;
                flex-wrap: wrap;
                gap: 10px;
            }
        }
        
        .btn {
            display: inline-block;
            font-weight: 500;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.65rem 1.5rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 6px;
            transition: all 0.2s ease-in-out;
            cursor: pointer;
        }
        
        @media (max-width: 576px) {
            .btn {
                padding: 0.6rem 1.2rem;
                font-size: 0.95rem;
            }
        }
        
        @media (max-width: 400px) {
            .btn {
                padding: 0.55rem 1rem;
                font-size: 0.9rem;
                width: 100%;
                margin: 5px 0;
            }
            
            .form-navigation {
                flex-direction: column-reverse;
            }
        }
        
        .btn:focus {
            outline: 0;
            box-shadow: 0 0 0 3px rgba(0, 170, 228, 0.25);
        }
        
        .btn-primary {
            color: #fff;
            background-color: #00AAE4;
            border-color: #00AAE4;
        }
        
        .btn-primary:hover {
            background-color: #0098cc;
            border-color: #0098cc;
        }
        
        .btn-secondary {
            color: #6c757d;
            background-color: #f8f9fa;
            border-color: #ced4da;
        }
        
        .btn-secondary:hover {
            color: #6c757d;
            background-color: #e9ecef;
            border-color: #ced4da;
        }
        
        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }
        
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        
        .btn-submit {
            background: linear-gradient(45deg, #00AAE4, #0088cc);
            border: none;
            color: white;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-submit:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #0088cc, #00AAE4);
            transition: all 0.3s;
            z-index: -1;
        }
        
        .btn-submit:hover:before {
            left: 0;
        }
        
        .btn-submit:disabled {
            background: #cccccc;
            cursor: not-allowed;
        }

        /* Cases à cocher et consentements */
        .checkbox-group {
            margin-bottom: 1.5rem;
            padding: 1rem;
            background-color: #f9f9f9;
            border-radius: 8px;
            border: 1px solid #eaeaea;
        }
        
        .checkbox-group h5 {
            margin-top: 0;
            margin-bottom: 1rem;
            font-size: 1.05rem;
            color: #444;
        }
        
        .checkbox-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.8rem;
            padding: 0.5rem;
            border-radius: 6px;
            transition: background-color 0.2s;
        }
        
        .checkbox-item:hover {
            background-color: #f0f0f0;
        }
        
        .checkbox-group input[type="checkbox"] {
            margin-right: 0.8rem;
            margin-top: 0.2rem;
            min-width: 18px;
            height: 18px;
            accent-color: #00AAE4;
        }
        
        /* Zones de téléchargement de fichiers */
        .file-upload-container {
            margin-bottom: 1.5rem;
        }
        
        .file-upload-container label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #444;
            font-size: 1rem;
        }
        
        .file-upload-area {
            border: 2px dashed #ced4da;
            border-radius: 8px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.2s;
            background-color: #f8f9fa;
            cursor: pointer;
            position: relative;
        }
        
        @media (max-width: 768px) {
            .file-upload-container label {
                font-size: 0.95rem;
            }
            .file-upload-area {
                padding: 1.2rem;
            }
        }
        
        @media (max-width: 576px) {
            .file-upload-container label {
                font-size: 0.9rem;
            }
            .file-upload-area {
                padding: 1rem;
            }
        }
        
        @media (max-width: 400px) {
            .file-upload-container {
                margin-bottom: 1.2rem;
            }
            .file-upload-container label {
                font-size: 0.85rem;
                margin-bottom: 0.3rem;
            }
            .file-upload-area {
                padding: 0.8rem;
                border-width: 1px;
            }
        }
        
        .file-upload-area:hover, .file-upload-area.highlight, .file-upload-area:focus-within {
            border-color: #00AAE4;
            background-color: rgba(0, 170, 228, 0.05);
        }
        
        .file-upload-area.highlight {
            border-width: 3px;
            transform: scale(1.01);
            box-shadow: 0 0 10px rgba(0, 170, 228, 0.2);
        }
        
        .file-upload-icon {
            display: block;
            margin: 0 auto 0.8rem;
            font-size: 2rem;
            color: #00AAE4;
        }
        
        .file-upload-text {
            color: #666;
            margin-bottom: 0.5rem;
        }
        
        @media (max-width: 768px) {
            .file-upload-icon {
                font-size: 1.8rem;
                margin-bottom: 0.6rem;
            }
            .file-upload-text {
                font-size: 0.95rem;
            }
        }
        
        @media (max-width: 576px) {
            .file-upload-icon {
                font-size: 1.6rem;
                margin-bottom: 0.5rem;
            }
            .file-upload-text {
                font-size: 0.9rem;
            }
        }
        
        @media (max-width: 400px) {
            .file-upload-icon {
                font-size: 1.4rem;
                margin-bottom: 0.4rem;
            }
            .file-upload-text {
                font-size: 0.85rem;
                margin-bottom: 0.3rem;
            }
        }
        
        .file-format {
            display: block;
            font-size: 0.8rem;
            color: #888;
        }
        
        @media (max-width: 768px) {
            .file-format {
                font-size: 0.75rem;
            }
        }
        
        @media (max-width: 576px) {
            .file-format {
                font-size: 0.7rem;
            }
        }
        
        @media (max-width: 400px) {
            .file-format {
                font-size: 0.65rem;
            }
        }
        
        .file-upload-container input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }
        
        .file-selected {
            margin-top: 0.8rem;
            padding: 0.5rem 0.8rem;
            background-color: #e8f7fc;
            border-radius: 6px;
            display: none;
            align-items: center;
            justify-content: space-between;
        }
        
        .file-selected.active {
            display: flex;
        }
        
        .file-name {
            font-size: 0.9rem;
            color: #333;
            font-weight: 500;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: 80%;
        }
        
        @media (max-width: 768px) {
            .file-selected {
                margin-top: 0.7rem;
                padding: 0.45rem 0.7rem;
            }
            .file-name {
                font-size: 0.85rem;
            }
        }
        
        @media (max-width: 576px) {
            .file-selected {
                margin-top: 0.6rem;
                padding: 0.4rem 0.6rem;
            }
            .file-name {
                font-size: 0.8rem;
                max-width: 75%;
            }
        }
        
        @media (max-width: 400px) {
            .file-selected {
                margin-top: 0.5rem;
                padding: 0.35rem 0.5rem;
            }
            .file-name {
                font-size: 0.75rem;
                max-width: 70%;
            }
        }
        
        .file-remove {
            color: #dc3545;
            cursor: pointer;
            font-size: 1.2rem;
            line-height: 1;
            background: none;
            border: none;
            padding: 0;
            transition: all 0.2s ease;
        }
        
        @media (max-width: 768px) {
            .file-remove {
                font-size: 1.1rem;
            }
        }
        
        @media (max-width: 576px) {
            .file-remove {
                font-size: 1rem;
            }
        }
        
        @media (max-width: 400px) {
            .file-remove {
                font-size: 0.9rem;
            }
        }
        
        .file-remove:hover {
            color: #b02a37;
            transform: scale(1.2);
        }
        
        /* Alerte */
        .alert {
            position: relative;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }
        
        .alert-info {
            color: #31708f;
            background-color: #d9edf7;
            border-color: #bee5eb;
        }
        
        @media (max-width: 768px) {
            .alert {
                padding: 12px;
                margin-bottom: 18px;
                font-size: 0.95rem;
            }
        }
        
        @media (max-width: 576px) {
            .alert {
                padding: 10px;
                margin-bottom: 16px;
                font-size: 0.9rem;
            }
        }
        
        @media (max-width: 400px) {
            .alert {
                padding: 8px;
                margin-bottom: 14px;
                font-size: 0.85rem;
            }
        }
        
        /* Texte d'aide */
        .form-text {
            display: block;
            margin-top: 0.25rem;
            font-size: 0.875rem;
        }
        
        .text-muted {
            color: #6c757d;
        }
        
        /* Animation spinner */
        .spinner-border {
            display: inline-block;
            width: 1rem;
            height: 1rem;
            vertical-align: text-bottom;
            border: 0.2em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            animation: spinner-border 0.75s linear infinite;
        }
        
        @keyframes spinner-border {
            to { transform: rotate(360deg); }
        }
        
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }
        
        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border-radius: 5px;
            width: 70%;
            max-width: 600px;
        }
        
        @media (max-width: 768px) {
            .modal-content {
                width: 80%;
                padding: 18px;
                margin: 20% auto;
            }
        }
        
        @media (max-width: 576px) {
            .modal-content {
                width: 90%;
                padding: 15px;
                margin: 25% auto;
            }
        }
        
        @media (max-width: 400px) {
            .modal-content {
                width: 95%;
                padding: 12px;
                margin: 30% auto;
            }
        }
        
        .modal-actions {
            margin-top: 20px;
            text-align: right;
        }

        /* Back Navigation */
        .back-navigation {
            margin-bottom: 20px;
            display: flex;
            justify-content: flex-start;
        }

        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #00AAE4;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            padding: 10px 20px;
            background: white;
            border-radius: 8px;
            border: 1px solid rgba(0, 170, 228, 0.15);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn-back i {
            font-size: 12px;
            transition: transform 0.2s ease;
        }

        .btn-back:hover {
            color: #0088cc;
            background: #F0F9FF;
            border-color: #00AAE4;
            box-shadow: 0 6px 15px rgba(0, 170, 228, 0.08);
            transform: translateY(-1px);
        }

        .btn-back:hover i {
            transform: translateX(-3px);
        }
    </style>
@endsection

@section('pages')
    <!-- Registration Section -->
    <section class="academy-registration">
        <div class="quote-header-image" style="background-image: url('{{ asset('images/slides/slides_acceuil/acceuil/IMG_6156.JPG') }}'); background-size: cover; background-position: center; height: 400px; border-radius: 0px; margin-bottom: 30px;"></div>
        <div class="academy-container">
            <!-- Back Navigation Bar -->
            <div class="back-navigation">
                <a href="{{ route('welcome') }}" class="btn-back" onclick="if(document.referrer && document.referrer.includes(window.location.host)){ event.preventDefault(); window.history.back(); }">
                    <i class="fas fa-chevron-left"></i>
                    <span>Retour / Back</span>
                </a>
            </div>

            <div class="form-header">
                <h2>Inscription à Sconnect Academy</h2>
                <p>Remplissez ce formulaire pour vous inscrire à l'une de nos formations professionnelles.</p>
            </div>

            <div class="registration-container">
                <div class="registration-form">
                    <div class="form-title">
                        <h3>Formulaire d'inscription</h3>
                        <p>Veuillez remplir tous les champs obligatoires marqués d'un astérisque (*)</p>
                    </div>
                    
                    <!-- Barre de progression -->
                    <div class="step-progress">
                        <div class="step-indicator active" data-step="1">
                            <span class="step-number">1</span>
                            <div class="step-label">Informations</div>
                        </div>
                        <div class="step-indicator" data-step="2">
                            <span class="step-number">2</span>
                            <div class="step-label">Formation</div>
                        </div>
                        <div class="step-indicator" data-step="3">
                            <span class="step-number">3</span>
                            <div class="step-label">Documents</div>
                        </div>
                        <div class="step-indicator" data-step="4">
                            <span class="step-number">4</span>
                            <div class="step-label">Disponibilité</div>
                        </div>
                        <div class="step-indicator" data-step="5">
                            <span class="step-number">5</span>
                            <div class="step-label">Finalisation</div>
                        </div>
                    </div>
                         @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('sconnect-academy.register') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Étape 1: Informations personnelles -->
                        <div class="form-section active" id="step-1">
                            <h4>Informations personnelles</h4>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="civilite" class="required-field">Civilité</label>
                                    <select class="form-control" id="civilite" name="civilite" required>
                                        <option value="">Sélectionnez</option>
                                        <option value="m">Monsieur</option>
                                        <option value="mme">Madame</option>
                                        <option value="mlle">Mademoiselle</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="nom" class="required-field">Nom</label>
                                    <input type="text" class="form-control" id="nom" name="nom" required>
                                </div>
                                <div class="form-group">
                                    <label for="prenom" class="required-field">Prénom</label>
                                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email" class="required-field">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="telephone" class="required-field">Téléphone</label>
                                    <input type="tel" class="form-control" id="telephone" name="telephone" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="date_naissance" class="required-field">Date de naissance</label>
                                    <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
                                </div>
                                <div class="form-group">
                                    <label for="lieu_naissance" class="required-field">Lieu de naissance</label>
                                    <input type="text" class="form-control" id="lieu_naissance" name="lieu_naissance" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="nationalite" class="required-field">Nationalité</label>
                                    <input type="text" class="form-control" id="nationalite" name="nationalite" required>
                                </div>
                                <div class="form-group">
                                    <label for="adresse" class="required-field">Adresse</label>
                                    <input type="text" class="form-control" id="adresse" name="adresse" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="niveau_etude" class="required-field">Niveau d'études</label>
                                    <select class="form-control" id="niveau_etude" name="niveau_etude" required>
                                        <option value="">Sélectionnez votre niveau d'études</option>
                                        <option value="bac">Baccalauréat</option>
                                        <option value="licence">Licence</option>
                                        <option value="master">Master</option>
                                        <option value="doctorat">Doctorat</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="profession">Profession actuelle</label>
                                    <input type="text" class="form-control" id="profession" name="profession">
                                </div>
                            </div>

                            <div class="form-navigation">
                                <button type="button" class="btn btn-primary next-step">Suivant</button>
                            </div>
                        </div>
                        
                        <!-- Étape 2: Choix de formation -->
                        <div class="form-section" id="step-2">
                            <h4>Choix de formation</h4>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="specialite" class="required-field">Spécialité</label>
                                    <select class="form-control" id="specialite" name="specialite" required>
                                        <option value="">Sélectionnez une spécialité</option>
                                        <option value="Analyse des Données (Data Analysis)">Analyse des Données (Data Analysis)</option>
                                        <option value="Développement Web/mobile">Développement Web/mobile</option>
                                        <option value="Sécurité Informatique">Sécurité Informatique</option>
                                        <option value="Technologie Mikrotik, Huawei et Cisco">Technologie Mikrotik, Huawei et Cisco</option>
                                        <option value="Infographie ou Design graphique">Infographie ou Design graphique</option>
                                        <option value="Montage Vidéo Pro">Montage Vidéo Pro</option>
                                        <option value="Gestion des Parcs informatiques">Gestion des Parcs informatiques</option>
                                        <option value="Administration Réseaux & Systèmes | Windows Server">Administration Réseaux & Systèmes | Windows Server</option>
                                        <option value="Gestion des Projets">Gestion des Projets</option>
                                        <option value="Marketing Digital">Marketing Digital</option>
                                        <option value="Commerce international & Logistique">Commerce international & Logistique</option>
                                        <option value="Ressources Humaines">Ressources Humaines</option>
                                        <option value="Secrétariat Professionnel">Secrétariat Professionnel</option>
                                        <option value="Management des Organisations / Entreprises">Management des Organisations / Entreprises</option>
                                        <option value="Préparation Test TOEFL, IELTS, TOEIC">Préparation Test TOEFL, IELTS, TOEIC</option>
                                        <option value="Anglais Académique ou Professionnel">Anglais Académique ou Professionnel</option>
                                        <option value="Télécom | Radiofréquence">Télécom | Radiofréquence</option>
                                        <option value="Télécom | Fibre Optique">Télécom | Fibre Optique</option>
                                        <option value="Télécom | Vsat / Microwave">Télécom | Vsat / Microwave</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="session" class="required-field">Session souhaitée</label>
                                    <select class="form-control" id="session" name="session" required>
                                        <option value="">Sélectionnez une session</option>
                                        <option value="janvier">Janvier</option>
                                        <option value="fevrier">Février</option>
                                        <option value="mars">Mars</option>
                                        <option value="avril">Avril</option>
                                        <option value="mai">Mai</option>
                                        <option value="juin">Juin</option>
                                        <option value="juillet">Juillet</option>
                                        <option value="aout">Août</option>
                                        <option value="septembre">Septembre</option>
                                        <option value="octobre">Octobre</option>
                                        <option value="novembre">Novembre</option>
                                        <option value="decembre">Décembre</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="format" class="required-field">Format de formation</label>
                                    <select class="form-control" id="format" name="format" required>
                                        <option value="">Sélectionnez un format</option>
                                        <option value="presentiel">Présentiel</option>
                                        <option value="distanciel">Distanciel</option>
                                        <option value="hybride">Hybride (mixte)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="motivation" class="required-field">Motivation</label>
                                <textarea class="form-control" id="motivation" name="motivation" rows="3" required placeholder="Expliquez brièvement votre motivation pour suivre cette formation et vos objectifs professionnels"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="attentes">Attentes spécifiques</label>
                                <textarea class="form-control" id="attentes" name="attentes" rows="2" placeholder="Précisez vos attentes particulières concernant cette formation"></textarea>
                            </div>

                            <div class="form-navigation">
                                <button type="button" class="btn btn-secondary prev-step">Précédent</button>
                                <button type="button" class="btn btn-primary next-step">Suivant</button>
                            </div>
                        </div>
                        
                        <!-- Étape 3: Documents -->
                        <div class="form-section" id="step-3">
                            <h4>Documents</h4>
                            
                            <div class="alert alert-info">
                                <p>Veuillez fournir les documents suivants au format PDF uniquement. Taille maximale: 5MB par fichier.</p>
                            </div>
                            
                            <div class="filed-upload-container">
                                <label for="cv">CV <span class="required-field"></span></label>
                                <div class="file-upload-area">
                                    <input type="file" id="cv" name="cv" accept=".pdf" required>
                                     </div>
                                <div class="file-selected" id="cv-selected">
                                    <span class="file-name"></span>
                                    <button type="button" class="file-remove" data-target="cv">&times;</button>
                                </div>
                            </div>

                            <div class="filed-upload-container">
                                <label for="lettre_motivation">Lettre de motivation</label>
                                <div class="file-upload-area">
                                   
                                    <input type="file" id="lettre_motivation" name="lettre_motivation" accept=".pdf">
                                </div>
                                <div class="file-selected" id="lettre_motivation-selected">
                                    <span class="file-name"></span>
                                    <button type="button" class="file-remove" data-target="lettre_motivation">&times;</button>
                                </div>
                            </div>

                            <div class="filed-upload-container">
                                <label for="diplome">Dernier diplôme obtenu <span class="required-field"></span></label>
                                <div class="file-upload-area">
                                   
                                    <input type="file" id="diplome" name="diplome" accept=".pdf" required>
                                </div>
                                <div class="file-selected" id="diplome-selected">
                                    <span class="file-name"></span>
                                    <button type="button" class="file-remove" data-target="diplome">&times;</button>
                                </div>
                            </div>
                            
                            <div class="filed-upload-container">
                                <label for="piece_identite">Pièce d'identité <span class="required-field"></span></label>
                                <div class="file-upload-area">
                                   
                                    <input type="file" id="piece_identite" name="piece_identite" accept=".pdf" required>
                                </div>
                                <div class="file-selected" id="piece_identite-selected">
                                    <span class="file-name"></span>
                                    <button type="button" class="file-remove" data-target="piece_identite">&times;</button>
                                </div>
                            </div>
                            
                            <div class="filed-upload-container">
                                <label for="autres_documents">Autres documents pertinents</label>
                                <div class="file-upload-area">
                                   
                                    <input type="file" id="autres_documents" name="autres_documents[]" accept=".pdf" multiple>
                                </div>
                                <div class="file-selected" id="autres_documents-selected">
                                    <span class="file-name"></span>
                                    <button type="button" class="file-remove" data-target="autres_documents">&times;</button>
                                </div>
                            </div>

                            <div class="form-navigation">
                                <button type="button" class="btn btn-secondary prev-step">Précédent</button>
                                <button type="button" class="btn btn-primary next-step">Suivant</button>
                            </div>
                        </div>
                        
                        <!-- Étape 4: Disponibilité -->
                        <div class="form-section" id="step-4">
                            <h4>Disponibilité</h4>
                            
                            <!-- Disponibilité -->
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="date_debut" class="required-field">Date de début souhaitée</label>
                                    <input type="date" class="form-control" id="date_debut" name="date_debut" required>
                                </div>
                                <div class="form-group">
                                    <label for="horaires" class="required-field">Horaires préférés</label>
                                    <select class="form-control" id="horaires" name="horaires" required>
                                        <option value="">Sélectionnez vos horaires préférés</option>
                                        <option value="matin">Matin (8h-12h)</option>
                                        <option value="apres-midi">Après-midi (13h-17h)</option>
                                        <option value="soir">Soir (18h-21h)</option>
                                        <option value="weekend">Weekend</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Stage -->
                            <div class="form-group">
                                <label>Disponibilité pour un stage</label>
                                <div class="checkbox-group">
                                    <input type="checkbox" id="stage_dispo" name="stage_dispo" value="1">
                                    <label for="stage_dispo">Je suis intéressé(e) par un stage à l'issue de ma formation</label>
                                </div>
                            </div>
                            
                            <div id="stage_details" style="display: none;">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="stage_debut">Début de stage souhaité</label>
                                        <input type="date" class="form-control" id="stage_debut" name="stage_debut">
                                    </div>
                                    <div class="form-group">
                                        <label for="stage_duree">Durée souhaitée</label>
                                        <select class="form-control" id="stage_duree" name="stage_duree">
                                            <option value="">Sélectionnez une durée</option>
                                            <option value="1">1 mois</option>
                                            <option value="2">2 mois</option>
                                            <option value="3">3 mois</option>
                                            <option value="6">6 mois</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-navigation">
                                <button type="button" class="btn btn-secondary prev-step">Précédent</button>
                                <button type="button" class="btn btn-primary next-step">Suivant</button>
                            </div>
                        </div>
                        
                        <!-- Étape 5: Commentaires et consentement -->
                        <div class="form-section" id="step-5">
                            <h4>Finalisation de votre inscription</h4>
                            
                            <!-- Commentaires -->
                            <div class="form-group">
                                <label for="commentaires">Commentaires ou questions</label>
                                <textarea class="form-control" id="commentaires" name="commentaires" rows="3" placeholder="Avez-vous des questions ou des commentaires supplémentaires ?"></textarea>
                            </div>

                            <!-- Consentement -->
                            <div class="checkbox-group">
                                <input type="checkbox" id="consent_data" name="consent_data" required>
                                <label for="consent_data" class="required-field">Je consens au traitement de mes données personnelles conformément à la politique de confidentialité de Sconnect Academy.</label>
                            </div>
                            
                            <div class="checkbox-group">
                                <input type="checkbox" id="consent_conditions" name="consent_conditions" required>
                                <label for="consent_conditions" class="required-field">J'accepte les conditions générales de Sconnect Academy.</label>
                            </div>
                            
                            <div class="checkbox-group">
                                <input type="checkbox" id="consent_newsletter" name="consent_newsletter">
                                <label for="consent_newsletter">Je souhaite recevoir des informations sur les futures formations et événements de Sconnect Academy.</label>
                            </div>

                            <div class="form-navigation">
                                <button type="button" class="btn btn-secondary prev-step">Précédent</button>
                                <button type="submit" class="btn btn-success btn-submit">Soumettre ma candidature</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // File Upload Handling
        function initFileUploads() {
            const uploadAreas = document.querySelectorAll('.file-upload-area');
            
            uploadAreas.forEach(area => {
                // Initial setup for existing inputs
                const input = area.querySelector('input[type="file"]');
                setupFileInput(input, area);

                // Drag and drop effects
                ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                    area.addEventListener(eventName, preventDefaults, false);
                });
            });
        }

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        function setupFileInput(input, uploadArea) {
            const container = uploadArea.closest('.filed-upload-container');
            const isMultiple = input.hasAttribute('multiple') || input.name.includes('[]');
            
            // Drag effects
            ['dragenter', 'dragover'].forEach(eventName => {
                uploadArea.addEventListener(eventName, () => uploadArea.classList.add('highlight'), false);
            });
            
            ['dragleave', 'drop'].forEach(eventName => {
                uploadArea.addEventListener(eventName, () => uploadArea.classList.remove('highlight'), false);
            });
            
            // Handle change
            input.addEventListener('change', function(e) {
                handleFiles(this, uploadArea, container, isMultiple);
            });
            
            // Handle drop
            uploadArea.addEventListener('drop', function(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                input.files = files;
                handleFiles(input, uploadArea, container, isMultiple);
            });
        }

        function handleFiles(input, uploadArea, container, isMultiple) {
            if (input.files.length === 0) return;

            if (isMultiple) {
                // Multiple Mode (Accumulative)
                const listContainer = container.querySelector('.file-list') || createFileList(container);
                
                Array.from(input.files).forEach(file => {
                    const item = document.createElement('div');
                    item.className = 'file-selected active mb-2';
                    item.innerHTML = `
                        <span class="file-name">${file.name}</span>
                        <button type="button" class="file-remove">&times;</button>
                    `;
                    
                    // Remove handler
                    item.querySelector('.file-remove').addEventListener('click', function() {
                        item.remove();
                        input.remove(); // Remove the hidden input associated with this file(s)
                    });
                    
                    listContainer.appendChild(item);
                });

                // Hide current input (it holds the file data) and create a new one for next selection
                input.style.display = 'none';
                input.id = ''; // Remove ID to avoid conflict
                
                const newInput = document.createElement('input');
                newInput.type = 'file';
                newInput.name = input.name;
                newInput.accept = input.accept;
                if (input.multiple) newInput.multiple = true;
                
                uploadArea.appendChild(newInput);
                setupFileInput(newInput, uploadArea); // Re-bind events to new input

            } else {
                // Single Mode
                const fileSelectedDiv = container.querySelector('.file-selected');
                const fileNameSpan = container.querySelector('.file-name');
                const removeBtn = container.querySelector('.file-remove');

                uploadArea.style.display = 'none';
                fileSelectedDiv.classList.add('active');
                fileNameSpan.textContent = input.files[0].name;
                
                // Remove handler (Single)
                // Use a cloned element to prevent duplicate listeners if re-initializing
                const newRemoveBtn = removeBtn.cloneNode(true);
                removeBtn.parentNode.replaceChild(newRemoveBtn, removeBtn);
                
                newRemoveBtn.addEventListener('click', function() {
                    input.value = '';
                    uploadArea.style.display = 'block';
                    fileSelectedDiv.classList.remove('active');
                    fileNameSpan.textContent = '';
                });
            }
        }

        function createFileList(container) {
            const list = document.createElement('div');
            list.className = 'file-list mt-3';
            container.appendChild(list);
            return list;
        }

        // Initialize
        initFileUploads();

    });

    document.addEventListener('DOMContentLoaded', function() {
        // Variables pour suivre l'étape actuelle
        let currentStep = 1;
        const totalSteps = 5;
        
        // Éléments DOM
        const formSections = document.querySelectorAll('.form-section');
        const progressSteps = document.querySelectorAll('.step-indicator');
        const nextButtons = document.querySelectorAll('.next-step');
        const prevButtons = document.querySelectorAll('.prev-step');
        const form = document.querySelector('form');
        
        // Initialisation - Afficher uniquement la première section
        function initForm() {
            formSections.forEach((section, index) => {
                if (index === 0) {
                    section.classList.add('active');
                } else {
                    section.classList.remove('active');
                }
            });
            
            updateProgressBar();
        }
        
        // Mettre à jour la barre de progression
        function updateProgressBar() {
            progressSteps.forEach((step, index) => {
                if (index < currentStep) {
                    step.classList.add('active');
                    if (index < currentStep - 1) {
                        step.classList.add('completed');
                    } else {
                        step.classList.remove('completed');
                    }
                } else {
                    step.classList.remove('active');
                    step.classList.remove('completed');
                }
            });
        }
        
        // Validation des champs requis dans une section
        function validateSection(stepIndex) {
            const currentSection = formSections[stepIndex - 1];
            const requiredFields = currentSection.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('is-invalid');
                    
                    // Créer un message d'erreur si n'existe pas déjà
                    let errorMessage = field.nextElementSibling;
                    if (!errorMessage || !errorMessage.classList.contains('invalid-feedback')) {
                        errorMessage = document.createElement('div');
                        errorMessage.classList.add('invalid-feedback');
                        errorMessage.textContent = 'Ce champ est requis';
                        field.parentNode.insertBefore(errorMessage, field.nextSibling);
                    }
                } else {
                    field.classList.remove('is-invalid');
                    const errorMessage = field.nextElementSibling;
                    if (errorMessage && errorMessage.classList.contains('invalid-feedback')) {
                        errorMessage.remove();
                    }
                }
            });
            
            return isValid;
        }
        
        // Navigation vers l'étape suivante
        function goToNextStep() {
            if (validateSection(currentStep)) {
                formSections[currentStep - 1].classList.remove('active');
                currentStep++;
                formSections[currentStep - 1].classList.add('active');
                updateProgressBar();
                window.scrollTo(0, 0);
            }
        }
        
        // Navigation vers l'étape précédente
        function goToPrevStep() {
            formSections[currentStep - 1].classList.remove('active');
            currentStep--;
            formSections[currentStep - 1].classList.add('active');
            updateProgressBar();
            window.scrollTo(0, 0);
        }
        
        // Événements pour les boutons suivant/précédent
        nextButtons.forEach(button => {
            button.addEventListener('click', goToNextStep);
        });
        
        prevButtons.forEach(button => {
            button.addEventListener('click', goToPrevStep);
        });
        
        // // Validation du formulaire avant soumission
        // form.addEventListener('submit', function(e) {
        //     e.preventDefault();
            
        //     if (validateSection(currentStep)) {
        //         // Animation de chargement
        //         const submitBtn = document.querySelector('button[type="submit"]');
        //         submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Envoi en cours...';
        //         submitBtn.disabled = true;
                
        //         // Soumettre le formulaire après validation
        //         setTimeout(() => {
        //             this.submit();
        //         }, 1000);
        //     }
        // });
        
        // Afficher/masquer les détails de stage
        // const stageDispo = document.getElementById('stage_dispo');
        // if (stageDispo) {
        //     stageDispo.addEventListener('change', function() {
        //         const stageDetails = document.getElementById('stage_details');
        //         stageDetails.style.display = this.checked ? 'block' : 'none';
        //     });
        // }
        
        // // Chargement dynamique des programmes selon la spécialité
        // const specialiteSelect = document.getElementById('specialite');
        // const programmeSelect = document.getElementById('programme');
        
        // if (specialiteSelect && programmeSelect) {
        //     specialiteSelect.addEventListener('change', function() {
        //         const specialite = this.value;
        //         programmeSelect.innerHTML = '<option value="">Chargement des programmes...</option>';
                
        //         // Simuler un chargement asynchrone des programmes
        //         setTimeout(() => {
        //             programmeSelect.innerHTML = '<option value="">Sélectionnez un programme</option>';
                    
        //             // Ajouter les options en fonction de la spécialité
        //             if (specialite === 'Analyse des Données (Data Analysis)') {
        //                 addOptions(['SÉCURITÉ INFORMATIQUE', 'PROGRAMMATION & DÉVELOPPEMENT Web / Mobile', 'ADMINISTRATION RÉSEAUX & SYSTÈMES | WINDOWS SERVE', 'TECHNOLOGIES CISCO & MIKROTIK', 'ANALYSE DES DONNÉES (Data Analysis)', 'INFOGRAPHIE & DESIGN GRAPHIQUE', 'MONTAGE VIDÉO PRO', 'GESTION DES PARCS INFORMATIQUES (GPI)']);
        //             } else if (specialite === 'Développement Web/mobile') {
        //                 addOptions(['ANGLAIS ACADÉMIQUE & PROFESSIONNEL', 'PRÉPARATION AUX TESTS INTERNATIONAUX (TOEFL, IELTS, TOEIC) - SEVEN | POWER ENGLISH']);
        //             } else if (specialite === 'Sécurité Informatique') {
        //                 addOptions(['RESSOURCES HUMAINES', 'MANAGEMENT DES ORGANISATIONS / ENTREPRISES', 'Comptabilité', 'SECRÉTARIAT PROFESSIONNEL']);
        //             } else if (specialite === 'Technologie Mikrotik, Huawei et Cisco') {
        //                 addOptions(['TRANSMISSION Par VSAT, Fibre optique, Faisceaux hertziens', 'VIDÉOSURVEILLANCE (CCTV)', 'RADIOFRÉQUENCE']);
        //             } else if (specialite === 'Infographie ou Design graphique') {
        //                 addOptions(['MARKETING DIGITAL & RÉSEAUX SOCIAUX', 'GESTION DE PROJETS', 'COMMERCE INTERNATIONAL & LOGISTIQUE']);
        //             } else if (specialite === 'Montage Vidéo Pro') {
        //                 addOptions(['MARKETING DIGITAL & RÉSEAUX SOCIAUX', 'GESTION DE PROJETS', 'COMMERCE INTERNATIONAL & LOGISTIQUE']);
        //             } else if (specialite === 'Gestion des Parcs informatiques') {
        //                 addOptions(['MARKETING DIGITAL & RÉSEAUX SOCIAUX', 'GESTION DE PROJETS', 'COMMERCE INTERNATIONAL & LOGISTIQUE']);
        //             } else if (specialite === 'Administration Réseaux & Systèmes | Windows Server') {
        //                 addOptions(['MARKETING DIGITAL & RÉSEAUX SOCIAUX', 'GESTION DE PROJETS', 'COMMERCE INTERNATIONAL & LOGISTIQUE']);
        //             } else if (specialite === 'Gestion des Projets') {
        //                 addOptions(['MARKETING DIGITAL & RÉSEAUX SOCIAUX', 'GESTION DE PROJETS', 'COMMERCE INTERNATIONAL & LOGISTIQUE']);
        //             } else if (specialite === 'Marketing Digital') {
        //                 addOptions(['MARKETING DIGITAL & RÉSEAUX SOCIAUX', 'GESTION DE PROJETS', 'COMMERCE INTERNATIONAL & LOGISTIQUE']);
        //             } else if (specialite === 'Commerce international & Logistique') {
        //                 addOptions(['MARKETING DIGITAL & RÉSEAUX SOCIAUX', 'GESTION DE PROJETS', 'COMMERCE INTERNATIONAL & LOGISTIQUE']);
        //             } else if (specialite === 'Ressources Humaines') {
        //                 addOptions(['MARKETING DIGITAL & RÉSEAUX SOCIAUX', 'GESTION DE PROJETS', 'COMMERCE INTERNATIONAL & LOGISTIQUE']);
        //             } else if (specialite === 'Secrétariat Professionnel') {
        //                 addOptions(['MARKETING DIGITAL & RÉSEAUX SOCIAUX', 'GESTION DE PROJETS', 'COMMERCE INTERNATIONAL & LOGISTIQUE']);
        //             } else if (specialite === 'Management des Organisations / Entreprises') {
        //                 addOptions(['MARKETING DIGITAL & RÉSEAUX SOCIAUX', 'GESTION DE PROJETS', 'COMMERCE INTERNATIONAL & LOGISTIQUE']);
        //             } else if (specialite === 'Préparation Test TOEFL, IELTS, TOEIC') {
        //                 addOptions(['MARKETING DIGITAL & RÉSEAUX SOCIAUX', 'GESTION DE PROJETS', 'COMMERCE INTERNATIONAL & LOGISTIQUE']);
        //             } else if (specialite === 'Anglais Académique ou Professionnel') {
        //                 addOptions(['MARKETING DIGITAL & RÉSEAUX SOCIAUX', 'GESTION DE PROJETS', 'COMMERCE INTERNATIONAL & LOGISTIQUE']);
        //             } else if (specialite === 'Télécom | Radiofréquence') {
        //                 addOptions(['MARKETING DIGITAL & RÉSEAUX SOCIAUX', 'GESTION DE PROJETS', 'COMMERCE INTERNATIONAL & LOGISTIQUE']);
        //             } else if (specialite === 'Télécom | Fibre Optique') {
        //                 addOptions(['MARKETING DIGITAL & RÉSEAUX SOCIAUX', 'GESTION DE PROJETS', 'COMMERCE INTERNATIONAL & LOGISTIQUE']);
        //             } else if (specialite === 'Télécom | Vsat / Microwave') {
        //                 addOptions(['MARKETING DIGITAL & RÉSEAUX SOCIAUX', 'GESTION DE PROJETS', 'COMMERCE INTERNATIONAL & LOGISTIQUE']);
        //             }
        //         }, 500);
        //     });
        // }
        
        // function addOptions(options) {
        //     options.forEach(option => {
        //         const optElement = document.createElement('option');
        //         optElement.value = option.toLowerCase().replace(/ /g, '-');
        //         optElement.textContent = option;
        //         programmeSelect.appendChild(optElement);
        //     });
        // }
        
        // Initialiser le formulaire
        // initForm();
    });
</script>

<script>
    document.querySelector('form').addEventListener('submit', function(e) {
        // Clear previous errors
        document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
        document.querySelectorAll('.invalid-feedback').forEach(el => el.style.display = 'none');
        
        // Validate required fields
        let isValid = true;
        const requiredFields = ['civilite', 'nom', 'prenom', 'email', 'telephone', 'date_naissance', 
                              'lieu_naissance', 'nationalite', 'adresse', 'niveau_etude', 'specialite',
                              'session', 'format', 'motivation', 'cv', 'diplome'];
        
        requiredFields.forEach(field => {
            const input = document.querySelector(`[name="${field}"]`);
            if (!input.value.trim()) {
                input.classList.add('is-invalid');
                const errorElement = input.nextElementSibling;
                if (errorElement && errorElement.classList.contains('invalid-feedback')) {
                    errorElement.textContent = 'Ce champ est obligatoire';
                    errorElement.style.display = 'block';
                }
                isValid = false;
            }
        });
        
        // Validate email format
        const email = document.querySelector('[name="email"]');
        if (email.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
            email.classList.add('is-invalid');
            const errorElement = email.nextElementSibling;
            if (errorElement && errorElement.classList.contains('invalid-feedback')) {
                errorElement.textContent = 'Email invalide';
                errorElement.style.display = 'block';
            }
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault();
            // Scroll to first error
            document.querySelector('.is-invalid')?.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }
    });
</script>
@endsection