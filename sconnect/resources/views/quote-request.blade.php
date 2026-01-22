<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Demandez votre devis personnalisé - Sconnect Plus vous propose la meilleure solution au meilleur prix">
    <title>Demander un devis - Sconnect Plus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modern-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/minimal-footer.css') }}">
    <style>
        .quote-page {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
            line-height: 1.6;
            color: #333;
        }
        
        /* Styles pour l'image d'en-tête */
        .quote-header-image {
            height: 250px;
            border-radius: 12px;
            margin-bottom: 30px;
            /* box-shadow: 0 8px 25px rgba(0, 170, 228, 0.3); */
            background-size: cover;
            background-position: center;
        }
        
        /* Styles pour le texte sous l'image */
        .quote-header-text {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .quote-header-text h1 {
            color: #00AAE4;
            font-size: 1.8rem;
            margin-bottom: 12px;
            font-weight: 600;
            line-height: 1.3;
        }
        
        .quote-header-text .subtitle {
            color: #555;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.4;
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Styles responsive */
        @media (max-width: 768px) {
            .quote-header-image {
                height: 200px;
            }
            
            .quote-header-text h1 {
                font-size: 1.6rem;
            }
            
            .quote-header-text .subtitle {
                font-size: 0.9rem;
            }
        }
        
        @media (max-width: 480px) {
            .quote-header-image {
                height: 150px;
            }
            
            .quote-header-text h1 {
                font-size: 1.4rem;
            }
        }
        
        .quote-form-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: #333;
            font-size: 0.9rem;
        }
        
        .form-group label .required {
            color: #e74c3c;
            font-size: 0.8rem;
        }
        
        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            background-color: #fff;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #00AAE4;
            box-shadow: 0 0 0 3px rgba(0, 170, 228, 0.1);
        }
        
        .form-control.error {
            border-color: #e74c3c;
        }
        
        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }
        
        .file-upload {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        
        .file-upload input[type="file"] {
            position: absolute;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        
        .file-upload-label {
            display: block;
            padding: 12px 15px;
            border: 2px dashed #00AAE4;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }
        
        .file-upload-label:hover {
            background-color: #e3f2fd;
        }
        
        .contact-methods {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }
        
        .contact-method {
            position: relative;
        }
        
        .contact-method input[type="radio"] {
            position: absolute;
            opacity: 0;
        }
        
        .contact-method label {
            display: block;
            padding: 15px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .contact-method input[type="radio"]:checked + label {
            border-color: #00AAE4;
            background-color: #e3f2fd;
            color: #00AAE4;
        }
        
        .submit-btn {
            background: linear-gradient(135deg, #00AAE4 0%, #0088cc 100%);
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 170, 228, 0.3);
            width: 100%;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 170, 228, 0.4);
        }
        
        .submit-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }
        
        .info-section {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .info-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 15px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        
        .info-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #00AAE4 0%, #0088cc 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.1rem;
            flex-shrink: 0;
        }
        
        .info-item strong {
            font-size: 0.9rem;
            color: #333;
        }
        
        .info-item br + text {
            font-size: 0.8rem;
            color: #666;
        }
        
        .why-us-section {
            margin-bottom: 30px;
        }
        
        .why-us-section h3 {
            text-align: center;
            color: #00AAE4;
            font-size: 1.4rem;
            margin-bottom: 25px;
            font-weight: 600;
        }
        
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 15px;
        }
        
        .benefit-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 15px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        
        .benefit-icon {
            color: #28a745;
            font-size: 1.2rem;
            margin-top: 3px;
            flex-shrink: 0;
        }
        
        .benefit-item strong {
            font-size: 0.9rem;
            color: #333;
            display: block;
            margin-bottom: 4px;
        }
        
        .benefit-item br + text {
            font-size: 0.8rem;
            color: #666;
            line-height: 1.4;
        }
        
        .cta-secondary {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .cta-secondary h3 {
            margin-bottom: 12px;
            font-size: 1.2rem;
            font-weight: 600;
        }
        
        .cta-secondary p {
            font-size: 0.9rem;
            margin-bottom: 15px;
            line-height: 1.4;
        }
        
        .cta-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .cta-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: white;
            color: #28a745;
            padding: 12px 24px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .cta-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(255,255,255,0.3);
            text-decoration: none;
            color: #28a745;
        }
        
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
            color: white;
            padding: 12px 24px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(108, 117, 125, 0.3);
        }
        
        .back-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(108, 117, 125, 0.4);
            text-decoration: none;
            color: white;
        }
        
        .error-message {
            color: #e74c3c;
            font-size: 0.9rem;
            margin-top: 5px;
        }
        
        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }
        
        @media (max-width: 768px) {
            .quote-page {
                padding: 15px 10px;
            }
            
            .quote-header {
                padding: 20px 15px;
                margin-bottom: 25px;
            }
            
            .quote-header h1 {
                font-size: 1.5rem;
            }
            
            .quote-header .subtitle {
                font-size: 0.9rem;
            }
            
            .quote-form-container {
                padding: 20px;
            }
            
            .form-row {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            
            .contact-methods {
                grid-template-columns: 1fr;
                gap: 10px;
            }
            
            .info-section {
                padding: 20px;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }
            
            .benefits-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }
            
            .cta-secondary {
                padding: 20px;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    @include('includes._header')
    
    <div class="quote-page">
        <!-- Image d'en-tête -->
        <div class="quote-header-image" style="background-image: url('{{ asset('images/slides/page/devis.JPG') }}'); background-size: cover; background-position: center; height: 400px; border-radius: 12px; margin-bottom: 30px; "></div>
        
        <!-- Texte en dessous de l'image -->
        <div class="quote-header-text" style="text-align: center; margin-bottom: 40px;">
            <h1 style="color: #00AAE4; font-size: 1.8rem; margin-bottom: 12px; font-weight: 600;">Devis personnalisé en quelques minutes</h1>
            <p class="subtitle" style="color: #555; font-size: 1rem; max-width: 600px; margin: 0 auto; line-height: 1.4;">
                Nos experts analysent vos besoins et vous proposent<br>
                la meilleure solution au meilleur prix, sans engagement.
            </p>
        </div>
@if (Session::has('success'))
        <div class="alert-success" style="position: fixed; top: 20px; right: 20px; left: 20px; z-index: 9999; background: #4CAF50; color: white; padding: 15px 25px; border-radius: 4px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: space-between; max-width: 400px;">
            <span>{{ Session::get('success') }}</span>
            <button onclick="this.parentElement.remove()" style="background: transparent; border: none; color: white; cursor: pointer; margin-left: 15px; font-size: 18px;">
                &times;
            </button>
        </div>
    @endif
        <!-- Formulaire de demande de devis -->
        <div class="quote-form-container">
             @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            <form action="{{ route('quote.request') }}" method="POST">
                @csrf
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="first_name">Prénom <span class="required">*</span></label>
                        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" class="form-control" required>
                        <div class="error-message" id="first_name_error"></div>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Nom <span class="required">*</span></label>
                        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" class="form-control" required>
                        <div class="error-message" id="last_name_error"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="company">Entreprise / Organisation</label>
                    <input type="text" id="company" name="company" value="{{ old('company') }}" class="form-control" placeholder="Optionnel pour les particuliers">
                    <div class="error-message" id="company_error"></div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Adresse e-mail <span class="required">*</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" required>
                        <div class="error-message" id="email_error"></div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Numéro de téléphone / WhatsApp <span class="required">*</span></label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="+243..." required>
                        <div class="error-message" id="phone_error"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="service">Service souhaité <span class="required">*</span></label>
                    <select id="service" name="service" class="form-control" required>
                        <option value="" {{ old('service') == '' ? 'selected' : '' }}>Sélectionnez un service</option>
                        <option value="expertise-graphique-design" {{ old('service') == 'expertise-graphique-design' ? 'selected' : '' }}>Expertise Graphique &amp; Design</option>
                        <option value="kit-internet-haut-debit" {{ old('service') == 'kit-internet-haut-debit' ? 'selected' : '' }}>Kit Internet Haut débit</option>
                        <option value="expertise-entrepreneuriale" {{ old('service') == 'expertise-entrepreneuriale' ? 'selected' : '' }}>Expertise Entrepreneuriale</option>
                        <option value="expertise-informatique-securite" {{ old('service') == 'expertise-informatique-securite' ? 'selected' : '' }}>Expertise Informatique &amp; Sécurité</option>
                        <option value="expertise-telecommunications" {{ old('service') == 'expertise-telecommunications' ? 'selected' : '' }}>Expertise Télécommunications</option>
                        <option value="expertise-tech4school" {{ old('service') == 'expertise-tech4school' ? 'selected' : '' }}>Sconnect Tech4School (Kit Robotique ou VR/AR)</option>
                        <option value="expertise-ia" {{ old('service') == 'expertise-ia' ? 'selected' : '' }}>Expertise IA</option>
                        <option value="expertise-vr-ar" {{ old('service') == 'expertise-vr-ar' ? 'selected' : '' }}>Expertise VR/AR</option>

                    </select>
                    <div class="error-message" id="service_error"></div>
                </div>

                <div class="form-group">
                    <label for="details">Détails de votre demande <span class="required">*</span></label>
                    <textarea id="details" name="details" class="form-control" placeholder="Décrivez vos besoins, contraintes, délai souhaité, budget approximatif..." required>{{ old('details') }}</textarea>
                    <div class="error-message" id="details_error"></div>
                </div>

                <div class="form-group">
                    <label for="attachment">Pièce jointe (Format accepté : PDF, DOCX, DOC – Taille max. 5 Mo) </label>
                    <input type="file" id="attachment" name="attachment" class="form-control-file">
                    <div id="file-preview" style="margin-top:10px; display:none;">
                        <span id="file-name" style="font-weight:bold;"></span>
                        <button type="button" id="remove-file" class="btn btn-sm btn-danger ml-2">×</button>
                    </div>
                    <div class="error-message" id="attachment_error"></div>
                </div>

                <div class="form-group">
                    <label>Mode de contact préféré <span class="required">*</span></label>
                    <div class="contact-methods">
                        <div class="contact-method">
                            <input type="radio" id="contact_email" name="contact_method" value="email" {{ old('contact_method') == 'email' ? 'checked' : '' }} required>
                            <label for="contact_email">📧 Email</label>
                        </div>
                        <div class="contact-method">
                            <input type="radio" id="contact_phone" name="contact_method" value="phone" {{ old('contact_method') == 'phone' ? 'checked' : '' }}>
                            <label for="contact_phone">📞 Téléphone</label>
                        </div>
                        <div class="contact-method">
                            <input type="radio" id="contact_whatsapp" name="contact_method" value="whatsapp" {{ old('contact_method') == 'whatsapp' ? 'checked' : '' }}>
                            <label for="contact_whatsapp">💬 WhatsApp</label>
                        </div>
                    </div>
                    <div class="error-message" id="contact_method_error"></div>
                </div>

                <div class="form-group">
                    <button type="submit" class="submit-btn" id="submitBtn">
                        Envoyer la demande
                    </button>
                </div>
            </form>
        </div>

        <!-- Informations complémentaires -->
        <div class="info-section">
            <div class="info-grid">
                <div class="info-item">
                    <div class="info-icon">⏳</div>
                    <div>
                        <strong>Réponse rapide</strong><br>
                        <span style="font-size: 0.85rem; color: #666;">Réponse sous 24h maximum</span>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">💰</div>
                    <div>
                        <strong>100% gratuit</strong><br>
                        <span style="font-size: 0.85rem; color: #666;">Sans aucun engagement</span>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">🔒</div>
                    <div>
                        <strong>Données sécurisées</strong><br>
                        <span style="font-size: 0.85rem; color: #666;">Informations confidentielles</span>
                    </div>
                </div>
            </div>
        </div>

      
    </div>
    
    @include('includes._footer')

   
    
        <script src="{{ asset('js/modern-header.js') }}"></script>
        <script>
            document.querySelector('form').addEventListener('submit', function(e) {
                // Clear previous errors
                document.querySelectorAll('.error-message').forEach(el => el.textContent = '');
                document.querySelectorAll('.form-control').forEach(el => el.classList.remove('error'));
                
                let isValid = true;
                
                // Required fields validation
                const requiredFields = ['first_name', 'last_name', 'email', 'phone', 'service', 'details', 'contact_method'];
                requiredFields.forEach(field => {
                    const input = document.querySelector(`[name="${field}"]`);
                    if (!input.value.trim()) {
                        showError(field, 'Ce champ est requis');
                        isValid = false;
                    }
                });
                
                // Email format validation
                const email = document.querySelector('[name="email"]');
                if (email.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                    showError('email', 'Email invalide');
                    isValid = false;
                }
                
                // Phone number basic validation
                const phone = document.querySelector('[name="phone"]');
                if (phone.value && !/^[+0-9\s-]{8,20}$/.test(phone.value)) {
                    showError('phone', 'Numéro invalide');
                    isValid = false;
                }
                
                // File validation
                const fileInput = document.querySelector('[name="attachment"]');
                if (fileInput.files.length > 0) {
                    const file = fileInput.files[0];
                    const validTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'image/jpeg', 'image/png'];
                    const maxSize = 5 * 1024 * 1024; // 5MB
                    
                    if (!validTypes.includes(file.type)) {
                        showError('attachment', 'Type de fichier non supporté');
                        isValid = false;
                    }
                    
                    if (file.size > maxSize) {
                        showError('attachment', 'Fichier trop volumineux (max 5MB)');
                        isValid = false;
                    }
                }
                
                if (!isValid) {
                    e.preventDefault();
                    // Scroll to first error
                    document.querySelector('.error-message:not(:empty)')?.closest('.form-group')?.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            });
            
            function showError(field, message) {
                const errorElement = document.getElementById(`${field}_error`);
                const inputElement = document.querySelector(`[name="${field}"]`);
                
                if (errorElement) errorElement.textContent = message;
                if (inputElement) inputElement.classList.add('error');
            }
        </script>
        <script>
            document.getElementById('attachment').addEventListener('change', function(e) {
                const filePreview = document.getElementById('file-preview');
                const fileName = document.getElementById('file-name');
                
                if(this.files.length > 0) {
                    fileName.textContent = this.files[0].name;
                    filePreview.style.display = 'block';
                } else {
                    filePreview.style.display = 'none';
                }
            });

            document.getElementById('remove-file').addEventListener('click', function() {
                const fileInput = document.getElementById('attachment');
                fileInput.value = '';
                document.getElementById('file-preview').style.display = 'none';
            });
        </script>
</body>
</html>
