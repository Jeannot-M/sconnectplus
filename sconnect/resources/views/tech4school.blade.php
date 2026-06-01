@extends('pages.layout')

@section('title', 'Tech4School - Sconnect Plus')

@section('styles')
<style>
    :root {
        --primary-color: #00AAE4;
        --secondary-color: #005B94;
        --accent-color: #FF9F1C;
        --bg-light: #f8f9fa;
        --text-dark: #333333;
        --text-light: #666666;
        --gradient-blue: linear-gradient(135deg, #00AAE4 0%, #0088cc 100%);
    }

    body {
        background-color: var(--bg-light);
        color: var(--text-dark);
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
        line-height: 1.6;
    }

    /* Hero Section */
    .tech-hero {
        position: relative;
        overflow: hidden;
        min-height: 400px;
        display: flex;
        align-items: center;
        color: white;
        padding: 60px 0;
        text-align: center;
    }

    .tech-hero-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0;
        transition: opacity 1.5s ease-in-out;
        z-index: 1;
    }

    .tech-hero-slide.active {
        opacity: 1;
    }

    .tech-hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgb(0 91 148 / 12%) 0%, rgba(0, 170, 228, 0.8) 100%);
        z-index: 2;
    }
/* .tech-container */
    .tech-hero-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 2;
    }

    .tech-badge {
        background: rgba(255, 255, 255, 0.18);
        color: white;
        padding: 8px 18px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 13px;
        display: inline-block;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .tech-hero h1 {
        font-size: 52px;
        font-weight: 900;
        margin-bottom: 15px;
        letter-spacing: -1.5px;
        background: linear-gradient(135deg, #FFFFFF 40%, #E0F2FE 100%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .tech-hero p {
        font-size: 19px;
        opacity: 0.95;
        max-width: 750px;
        margin: 0 auto;
        line-height: 1.7;
        text-shadow: 0 1px 4px rgba(0, 0, 0, 0.15);
    }

    /* Container generic styling */
    .tech-container {
        max-width: 1140px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Section structures */
    section.tech-section-white {
        background-color: #ffffff;
        padding: 60px 0;
    }

    section.tech-section-gray {
        background-color: #f8f9fa;
        padding: 60px 0;
    }

    .section-header {
        text-align: center;
        margin-bottom: 45px;
        padding: 0 20px;
    }

    .section-header h2 {
        font-size: 32px;
        font-weight: 800;
        color: var(--secondary-color);
        margin-bottom: 12px;
        letter-spacing: -0.5px;
    }

    .section-header p {
        font-size: 16px;
        color: var(--primary-color);
        font-weight: 600;
        margin: 0;
    }

    .section-header p.sub {
        color: var(--text-light);
        font-weight: 400;
        font-style: italic;
        margin-top: 5px;
    }



    /* Presentation Section */
    .presentation-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }

    @media (max-width: 768px) {
        .presentation-grid {
            grid-template-columns: 1fr;
            gap: 25px;
        }
    }

    .presentation-block {
        background: #f8fafc;
        border-radius: 16px;
        padding: 30px;
        border: 1px solid #e2e8f0;
        border-left: 5px solid var(--primary-color);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.02), 0 8px 10px -6px rgba(0, 0, 0, 0.02);
        transition: all 0.3s ease;
    }

    .presentation-block.en {
        border-left-color: var(--accent-color);
    }

    .presentation-block h3 {
        font-size: 20px;
        font-weight: 800;
        margin-top: 0;
        margin-bottom: 12px;
        color: var(--secondary-color);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .presentation-block.en h3 {
        color: var(--secondary-color);
    }

    .presentation-block p {
        font-size: 15px;
        line-height: 1.7;
        color: var(--text-light);
        margin: 0;
    }

    .btn-download-brochure {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: var(--gradient-blue);
        color: white;
        padding: 14px 32px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 15px;
        text-decoration: none;
        box-shadow: 0 4px 15px rgba(0, 170, 228, 0.3);
    }

    /* Robotics Camp Section */
    .camp-intro {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 30px;
        line-height: 1.7;
        font-size: 16px;
        color: var(--text-light);
    }

    .camp-date-badge {
        background: #FFF7ED;
        color: #C2410C;
        border: 1px solid #FED7AA;
        padding: 10px 22px;
        border-radius: 8px;
        font-weight: 700;
        font-size: 15px;
        display: inline-block;
        margin-bottom: 30px;
        box-shadow: none;
    }

    /* Highlights Grid */
    .highlights-title {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--secondary-color);
        text-align: center;
    }

    .highlights-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1px;
        background-color: #E2E8F0;
        margin-bottom: 40px;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid #E2E8F0;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
    }

    .highlight-card {
        background: white;
        padding: 24px;
        display: flex;
        align-items: flex-start;
        gap: 15px;
        border-radius: 0;
    }

    .highlight-icon {
        width: 45px;
        height: 45px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
    }

    .highlight-icon.robot {
        background: rgba(255, 107, 107, 0.1);
        color: #ff6b6b;
    }
    .highlight-icon.gamepad {
        background: rgba(114, 9, 183, 0.1);
        color: #7209b7;
    }
    .highlight-icon.code {
        background: rgba(46, 196, 182, 0.1);
        color: #2ec4b6;
    }
    .highlight-icon.atom {
        background: rgba(67, 97, 238, 0.1);
        color: #4361ee;
    }
    .highlight-icon.language {
        background: rgba(0, 170, 228, 0.1);
        color: #00aae4;
    }
    .highlight-icon.award {
        background: rgba(255, 159, 28, 0.1);
        color: #ff9f1c;
    }

    .highlight-content p {
        font-size: 13px;
        color: var(--text-light);
        font-style: italic;
        line-height: 1.4;
        margin: 0;
    }

    /* Camp Action buttons */
    .camp-actions {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
        margin-top: 30px;
    }

    .btn-camp-brochure {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background-color: transparent;
        color: var(--primary-color);
        border: 2px solid var(--primary-color);
        padding: 14px 32px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 15px;
        text-decoration: none;
        box-sizing: border-box;
    }

    .btn-register-scroll {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--accent-color);
        color: white;
        padding: 14px 32px;
        border-radius: 50px;
        font-weight: 800;
        font-size: 15px;
        text-decoration: none;
        box-shadow: 0 4px 15px rgba(255, 159, 28, 0.3);
    }

    /* Form Section - Modern Premium Card style */
    .application-form {
        max-width: 800px;
        margin: 0 auto;
        background-color: #ffffff;
        border-radius: 20px;
        padding: 45px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.04), 0 1px 3px rgba(0, 0, 0, 0.02);
        border: 1px solid #e2e8f0;
    }

    .form-section {
        margin-bottom: 35px;
        padding-bottom: 30px;
        border-bottom: 1px solid #f1f5f9;
    }

    .form-section:last-of-type {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    /* Section Title Badge style */
    .section-title-wrapper {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 25px;
        padding-bottom: 12px;
        border-bottom: 2px solid #f1f5f9;
    }

    .section-number {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: var(--gradient-blue);
        color: white;
        font-weight: 800;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 10px rgba(0, 170, 228, 0.2);
        flex-shrink: 0;
    }

    .section-title-text h4 {
        font-size: 16px;
        font-weight: 800;
        color: var(--secondary-color);
        margin: 0;
        line-height: 1.2;
    }

    .section-title-text span {
        font-size: 12px;
        color: var(--text-light);
        display: block;
        margin-top: 2px;
    }

    .form-row {
        display: flex;
        flex-wrap: wrap;
        gap: 24px;
        margin-bottom: 20px;
    }

    .form-row:last-child {
        margin-bottom: 0;
    }

    .form-group {
        flex: 1;
        min-width: 250px;
    }

    .form-group.full-width {
        flex: 0 0 100%;
    }

    .form-group label {
        display: block;
        font-size: 13px;
        font-weight: 700;
        color: #475569;
        margin-bottom: 8px;
    }

    .form-group label span {
        font-size: 12px;
        color: var(--text-light);
        font-weight: 400;
        font-style: italic;
    }

    .form-control {
        width: 100%;
        padding: 14px 16px;
        border: 1.5px solid #cbd5e1;
        border-radius: 10px;
        font-size: 14px;
        color: var(--text-dark);
        background: #f8fafc;
        transition: all 0.3s ease;
        box-sizing: border-box;
    }

    .form-control:focus {
        background: #ffffff;
        border-color: var(--primary-color);
        box-shadow: none;
        outline: none;
    }

    /* Gender Select Cards */
    .gender-selector {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
        width: 100%;
    }

    .gender-card {
        cursor: pointer;
        display: block;
        margin: 0;
    }

    .gender-card input[type="radio"] {
        display: none;
    }

    .gender-card-content {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        padding: 13px 20px;
        border-radius: 10px;
        border: 1.5px solid #cbd5e1;
        background: #f8fafc;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        text-align: center;
    }

    .gender-card-content i {
        font-size: 18px;
        transition: transform 0.3s ease;
    }

    .gender-card-content i.male-icon {
        color: #00AAE4;
    }

    .gender-card-content i.female-icon {
        color: #ff6b6b;
    }

    .gender-card-content span {
        font-size: 14px;
        font-weight: 700;
        color: #475569;
    }

    .gender-card:hover .gender-card-content {
        border-color: #94a3b8;
        background: #f1f5f9;
    }

    .gender-card input[type="radio"]:checked + .gender-card-content {
        border-color: var(--primary-color);
        background: #f0f9ff;
        box-shadow: 0 4px 12px rgba(0, 170, 228, 0.08);
    }

    .gender-card input[type="radio"]:checked + .gender-card-content span {
        color: var(--secondary-color);
    }

    .gender-card input[type="radio"]:checked + .gender-card-content i {
        transform: scale(1.15);
    }

    /* Language Selection Cards */
    .language-selector {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
        width: 100%;
    }

    .lang-card {
        cursor: pointer;
        display: block;
        margin: 0;
    }

    .lang-card input[type="radio"] {
        display: none;
    }

    .lang-card-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 15px 10px;
        border-radius: 10px;
        border: 1.5px solid #cbd5e1;
        background: #f8fafc;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        text-align: center;
    }

    .lang-card-content i {
        font-size: 20px;
        color: #64748b;
        transition: all 0.3s ease;
    }

    .lang-card-content span {
        font-size: 13px;
        font-weight: 700;
        color: #475569;
    }

    .lang-card:hover .lang-card-content {
        border-color: #94a3b8;
        background: #f1f5f9;
    }

    .lang-card input[type="radio"]:checked + .lang-card-content {
        border-color: var(--primary-color);
        background: #f0f9ff;
        box-shadow: 0 4px 12px rgba(0, 170, 228, 0.08);
    }

    .lang-card input[type="radio"]:checked + .lang-card-content i {
        color: var(--primary-color);
        transform: translateY(-2px);
    }

    .lang-card input[type="radio"]:checked + .lang-card-content span {
        color: var(--secondary-color);
    }

    /* Session selector card */
    .session-selector {
        width: 100%;
    }

    .session-card {
        cursor: pointer;
        display: block;
        margin: 0;
    }

    .session-card input[type="checkbox"] {
        display: none;
    }

    .session-card-content {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 16px 20px;
        border-radius: 12px;
        border: 2px solid var(--primary-color);
        background: #f0f9ff;
        box-shadow: 0 4px 12px rgba(0, 170, 228, 0.05);
        transition: all 0.3s ease;
    }

    .session-card-content .session-icon {
        font-size: 24px;
        color: var(--primary-color);
        flex-shrink: 0;
    }

    .session-text-group {
        display: flex;
        flex-direction: column;
    }

    .session-title {
        font-size: 14px;
        font-weight: 800;
        color: var(--secondary-color);
    }

    .session-subtitle {
        font-size: 12px;
        color: var(--text-light);
        margin-top: 2px;
    }

    /* Confirm card check list */
    .confirm-card {
        cursor: pointer;
        display: block;
        margin: 0;
    }

    .confirm-card input[type="checkbox"] {
        display: none;
    }

    .confirm-card-content {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        padding: 18px;
        border-radius: 12px;
        border: 2px solid #cbd5e1;
        background: #f8fafc;
        transition: all 0.3s ease;
    }

    .confirm-checkbox-box {
        width: 22px;
        height: 22px;
        border-radius: 6px;
        border: 2px solid #cbd5e1;
        background: white;
        display: inline-block;
        position: relative;
        flex-shrink: 0;
        transition: all 0.2s ease;
    }

    .confirm-checkbox-box::after {
        content: "";
        position: absolute;
        width: 6px;
        height: 11px;
        border: solid white;
        border-width: 0 3px 3px 0;
        transform: rotate(45deg) scale(0);
        left: 6px;
        top: 2px;
        transition: all 0.2s ease;
    }

    .confirm-text {
        font-size: 14px;
        font-weight: 700;
        color: #475569;
        line-height: 1.4;
    }

    .confirm-subtext {
        display: block;
        font-size: 12px;
        color: var(--text-light);
        font-weight: 400;
        margin-top: 4px;
    }

    .confirm-card:hover .confirm-card-content {
        border-color: #94a3b8;
        background: #f1f5f9;
    }

    .confirm-card input[type="checkbox"]:checked + .confirm-card-content {
        border-color: #10b981;
        background: #f0fdf4;
    }

    .confirm-card input[type="checkbox"]:checked + .confirm-card-content .confirm-checkbox-box {
        background: #10b981;
        border-color: #10b981;
    }

    .confirm-card input[type="checkbox"]:checked + .confirm-card-content .confirm-checkbox-box::after {
        transform: rotate(45deg) scale(1);
    }

    .confirm-card input[type="checkbox"]:checked + .confirm-card-content .confirm-text {
        color: #065f46;
    }

    .btn-submit-form {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        background: var(--gradient-blue);
        color: white;
        border: none;
        padding: 16px 48px;
        border-radius: 50px;
        font-weight: 800;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 170, 228, 0.3);
    }

    .btn-submit-form:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 20px rgba(0, 170, 228, 0.4);
    }

    .form-submit-wrapper {
        text-align: center;
        margin-top: 30px;
    }

    /* Presentation Video Specifics */
    .presentation-video-wrapper {
        position: relative;
        width: 100%;
        max-width: 800px;
        margin: 0 auto 35px;
        aspect-ratio: 16/9;
        overflow: hidden;
        border: 1px solid rgba(0, 170, 228, 0.2);
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    }

    .presentation-video-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }


    /* Responsive overrides */
    @media (max-width: 992px) {
        .highlights-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1px;
        }
    }

    @media (max-width: 768px) {
        section.tech-section-white,
        section.tech-section-gray {
            padding: 40px 0;
        }

        .tech-hero {
            aspect-ratio: 1402 / 1122;
            min-height: auto;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tech-hero h1 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .tech-hero p {
            font-size: 14px;
            line-height: 1.4;
            padding: 0 15px;
        }

        .section-header {
            margin-bottom: 30px;
            padding: 0 10px;
        }

        .section-header h2 {
            font-size: 26px;
        }

        .presentation-grid {
            gap: 24px;
        }

        .presentation-block {
            padding: 20px;
            border-radius: 12px;
        }

        .btn-download-brochure,
        .btn-camp-brochure,
        .btn-submit-form {
            display: flex;
            width: 100%;
            max-width: 100%;
            justify-content: center;
            box-sizing: border-box;
            font-size: 14px;
            padding: 12px 20px;
            text-align: center;
        }

        .camp-actions {
            flex-direction: column;
            gap: 12px;
            width: 100%;
            padding: 0;
        }

        .highlights-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1px;
        }

        .highlight-card {
            padding: 15px 10px;
            gap: 10px;
            border-radius: 0;
            flex-direction: column;
            align-items: center;
            text-align: center;
            height: 100%;
            box-sizing: border-box;
        }

        .highlight-icon {
            width: 36px;
            height: 36px;
            font-size: 16px;
            border-radius: 8px;
            margin-bottom: 2px;
        }

        .highlight-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .highlight-content h4 {
            font-size: 12px;
            margin-bottom: 2px;
        }

        .highlight-content p {
            font-size: 10px;
        }

        .tech-container {
            padding: 0 15px;
        }

        .application-form {
            padding: 28px 20px;
            border-radius: 20px;
            border: none;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
            background: #ffffff;
        }
        
        .form-section {
            margin-bottom: 28px;
            padding-bottom: 24px;
            border-bottom: 1px solid #f1f5f9;
        }

        .form-section:last-of-type {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .section-title-wrapper {
            margin-bottom: 20px;
            gap: 10px;
        }

        .section-number {
            width: 30px;
            height: 30px;
            font-size: 13px;
        }

        .section-title-text h4 {
            font-size: 14px;
        }

        .section-title-text span {
            font-size: 11px;
        }

        .form-row {
            display: flex;
            flex-direction: column;
            gap: 18px;
            margin-bottom: 18px;
        }

        .form-group {
            width: 100%;
            min-width: 100%;
        }

        .form-group label {
            font-size: 12px;
            font-weight: 700;
            color: #475569;
            margin-bottom: 6px;
            display: block;
        }

        /* Prevent Safari mobile zoom on focus with 16px font-size */
        .form-control {
            font-size: 16px;
            padding: 13px 14px;
            border-radius: 8px;
            border: 1.5px solid #cbd5e1;
            background: #f8fafc;
            color: #1e293b;
        }

        .form-control:focus {
            background: #ffffff;
            border-color: var(--primary-color);
            box-shadow: none;
        }

        /* Premium selectors mobile overrides */
        .gender-selector {
            gap: 12px;
        }

        .gender-card-content {
            padding: 12px 10px;
            gap: 8px;
            border-radius: 8px;
        }

        .gender-card-content span {
            font-size: 12px;
        }

        .gender-card-content i {
            font-size: 16px;
        }

        .language-selector {
            gap: 8px;
        }

        .lang-card-content {
            padding: 12px 6px;
            gap: 6px;
            border-radius: 8px;
        }

        .lang-card-content i {
            font-size: 18px;
        }

        .lang-card-content span {
            font-size: 11px;
        }

        .session-card-content {
            padding: 14px 16px;
            border-radius: 8px;
            gap: 12px;
        }

        .session-card-content .session-icon {
            font-size: 20px;
        }

        .session-title {
            font-size: 13px;
        }

        .session-subtitle {
            font-size: 11px;
        }

        .confirm-card-content {
            padding: 14px;
            border-radius: 8px;
            gap: 12px;
        }

        .confirm-text {
            font-size: 12px;
        }

        .confirm-subtext {
            font-size: 11px;
            margin-top: 2px;
        }

        .confirm-checkbox-box {
            width: 20px;
            height: 20px;
        }

        .confirm-checkbox-box::after {
            left: 5px;
            top: 1px;
            width: 5px;
            height: 9px;
        }
    }

    /* Modal de Succès (Pop-up) */
    .tech-modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(15, 23, 42, 0.65);
        backdrop-filter: blur(8px);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease-in-out;
    }

    .tech-modal-overlay.active {
        opacity: 1;
        pointer-events: auto;
    }

    .tech-modal-card {
        background: #ffffff;
        border-radius: 16px;
        padding: 35px;
        max-width: 500px;
        width: 90%;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        text-align: center;
        transform: scale(0.9);
        transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        border: 1px solid rgba(226, 232, 240, 0.8);
        box-sizing: border-box;
    }

    .tech-modal-overlay.active .tech-modal-card {
        transform: scale(1);
    }

    .modal-body {
        margin-bottom: 25px;
    }

    .modal-body h3 {
        font-size: 22px;
        font-weight: 800;
        color: #10B981;
        margin-top: 0;
        margin-bottom: 15px;
    }

    .modal-body p {
        font-size: 14px;
        color: var(--text-light);
        line-height: 1.6;
        margin-bottom: 12px;
    }

    .modal-body p:last-child {
        margin-bottom: 0;
    }

    .btn-modal-close {
        background: var(--gradient-blue);
        color: white;
        border: none;
        padding: 12px 35px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 170, 228, 0.2);
    }

    .btn-modal-close:hover {
        opacity: 0.9;
        transform: translateY(-1px);
    }
</style>
@endsection

@section('pages')
<!-- Hero Header -->
<section class="tech-hero">
    <!-- Automatic Background Slideshow -->
    <div class="tech-hero-slider" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
        <div class="tech-hero-slide active" 
             style="background-image: url('{{ asset('images/tech4school/img_9944.webp') }}');"
             data-src-webp="{{ asset('images/tech4school/img_9944.webp') }}"
             data-src-jpg="{{ asset('images/tech4school/img_9944.jpg') }}"></div>
        <div class="tech-hero-slide" 
             data-src-webp="{{ asset('images/tech4school/img_9945.webp') }}"
             data-src-jpg="{{ asset('images/tech4school/img_9945.jpg') }}"></div>
        <div class="tech-hero-slide" 
             data-src-webp="{{ asset('images/tech4school/img_9951.webp') }}"
             data-src-jpg="{{ asset('images/tech4school/img_9951.jpg') }}"></div>
        <div class="tech-hero-slide" 
             data-src-webp="{{ asset('images/tech4school/img_9952.webp') }}"
             data-src-jpg="{{ asset('images/tech4school/img_9952.jpg') }}"></div>
    </div>
    
    <!-- Dark overlay for readability -->
    <div class="tech-hero-overlay"></div>

    <div class="tech-hero-container" style="position: relative; z-index: 3;">
        <h1>Tech4School</h1>
        <p>Initiez vos enfants aux technologies de pointe : robotique, coding et innovation dans un cadre bilingue ludique et inspirant !</p>
    </div>
</section>

<!-- Content Sections -->



<!-- PRESENTATION SECTION -->
<section class="tech-section-white">
    <div class="tech-container">
        <div class="section-header">
            <h2>Présentation / Presentation</h2>
        </div>
        
        <div class="presentation-grid">
            <div class="presentation-block">
                <h3><i class="fas fa-quote-left" style="color: var(--primary-color); font-size: 14px; margin-right: 8px;"></i> Version Française</h3>
                <p>Tech4School est un programme éducatif technologique de l’entreprise SCONNECT PLUS qui initie les enfants et les jeunes à la robotique, au coding et à l’innovation à travers des expériences amusantes et interactives.</p>
            </div>
            
            <div class="presentation-block en">
                <h3><i class="fas fa-quote-left" style="color: var(--accent-color); font-size: 14px; margin-right: 8px;"></i> English Version</h3>
                <p>Tech4School is an educational technology program by SCONNECT PLUS Company that introduces children and young students to robotics, coding, and innovation through fun and interactive learning experiences.</p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ asset('documents/tech4school-brochure.pdf') }}" class="btn-download-brochure" download>
                <i class="fas fa-file-pdf"></i> Download Official Brochure of Tech4School
            </a>
        </div>
    </div>
</section>

<!-- CAMP DE VACANCES SECTION -->
<section class="tech-section-gray">
    <div class="tech-container">
        <div class="section-header">
            <h2>CAMP DE VACANCES EN ROBOTIQUE</h2>
            <p>ROBOTICS HOLIDAY CAMP</p>
        </div>

        <!-- Presentation Video Player -->
        <div class="presentation-video-wrapper">
            <iframe src="https://www.youtube.com/embed/jtWgKoJcPkg?autoplay=1&mute=1&loop=1&playlist=jtWgKoJcPkg" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div class="camp-intro">
            <p style="font-weight: 700; font-size: 17px; margin-bottom: 10px; color: var(--secondary-color); text-align: center;">
                Bienvenue au Camp de Vacances en Robotique ! / <em>Welcome to the Robotics holiday Camp!</em>
            </p>
            <p style="color: #4A4E69; font-size: 15px; text-align: center;">
                Préparez votre enfant à découvrir le monde passionnant de la robotique, du coding et de l’innovation à travers une expérience éducative amusante, interactive et inspirante.
                <br>
                <em style="color: var(--text-light); font-size: 14px; display: block; margin-top: 5px;">
                    Prepare your child to discover the exciting world of robotics, coding, and innovation through a fun, interactive, and inspiring educational experience.
                </em>
            </p>
        </div>

        <div style="text-align: center; margin-bottom: 30px;">
            <div class="camp-date-badge">
                DATE DÉBUT / START DATE : 25 Juin 2026
            </div>
        </div>

        <div class="highlights-title">
            Au programme / Program Highlights
        </div>

        <div class="highlights-grid">
            <div class="highlight-card">
                <div class="highlight-icon robot"><i class="fas fa-robot"></i></div>
                <div class="highlight-content">
                    <h4>Construction de robots</h4>
                    <p>Robot Building</p>
                </div>
            </div>
            
            <div class="highlight-card">
                <div class="highlight-icon gamepad"><i class="fas fa-gamepad"></i></div>
                <div class="highlight-content">
                    <h4>Défis et missions amusantes</h4>
                    <p>Fun Challenges & Missions</p>
                </div>
            </div>

            <div class="highlight-card">
                <div class="highlight-icon code"><i class="fas fa-code"></i></div>
                <div class="highlight-content">
                    <h4>Initiation au coding</h4>
                    <p>Introduction to Coding</p>
                </div>
            </div>

            <div class="highlight-card">
                <div class="highlight-icon atom"><i class="fas fa-atom"></i></div>
                <div class="highlight-content">
                    <h4>Activités STEM interactives</h4>
                    <p>Interactive STEM Activities</p>
                </div>
            </div>

            <div class="highlight-card">
                <div class="highlight-icon language"><i class="fas fa-language"></i></div>
                <div class="highlight-content">
                    <h4>Encadrement bilingue</h4>
                    <p>Bilingual Support (Français & English)</p>
                </div>
            </div>

            <div class="highlight-card">
                <div class="highlight-icon award"><i class="fas fa-award"></i></div>
                <div class="highlight-content">
                    <h4>Certificat officiel de participation</h4>
                    <p>Official Certificate of Participation</p>
                </div>
            </div>
        </div>

        <div class="camp-actions">
            <a href="{{ asset('documents/camp-robotique-brochure-fr.pdf') }}" class="btn-camp-brochure" download>
                <i class="fas fa-download"></i> Télécharger la Brochure (Française)
            </a>
            
            <a href="{{ asset('documents/camp-robotique-brochure-en.pdf') }}" class="btn-camp-brochure" download>
                <i class="fas fa-download"></i> Download Brochure (English)
            </a>
        </div>
    </div>
</section>

<!-- REGISTRATION FORM SECTION -->
<section class="tech-section-gray" id="inscription-form-section">
    <div class="tech-container">
        <div class="section-header">
            <h2>Formulaire d’Inscription</h2>
            <p>2026 Robotics Holiday Camp Registration Form</p>
        </div>

        @if(session('error'))
            <div class="form-error-alert" style="max-width: 800px; margin: 0 auto 20px; padding: 15px; background-color: #fee2e2; border: 1px solid #fca5a5; color: #b91c1c; border-radius: 8px; text-align: center;">
                {{ session('error') }}
            </div>
        @endif

        <div class="application-form">
            <form action="{{ route('tech4school.register') }}" method="POST">
                @csrf

                <!-- Child Information Section -->
                <div class="form-section">
                    <div class="section-title-wrapper">
                        <div class="section-number">1</div>
                        <div class="section-title-text">
                            <h4>Informations de l'enfant</h4>
                            <span>Child Information</span>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="child_name">Nom complet de l’enfant / Child’s Full Name <span style="color:red">*</span></label>
                            <input type="text" name="child_name" id="child_name" class="form-control" placeholder="Ex: Jean-Marc Kabamba" value="{{ old('child_name') }}" required>
                            @error('child_name') <span class="field-error" style="color:red; font-size:12px; margin-top:5px; display:block;">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="child_age">Âge / Age <span style="color:red">*</span></label>
                            <input type="number" name="child_age" id="child_age" class="form-control" min="3" max="18" placeholder="Ex: 10" value="{{ old('child_age') }}" required>
                            @error('child_age') <span class="field-error" style="color:red; font-size:12px; margin-top:5px; display:block;">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label>Sexe / Gender <span style="color:red">*</span></label>
                            <div class="gender-selector">
                                <label class="gender-card">
                                    <input type="radio" name="child_gender" value="Masculin" {{ old('child_gender') == 'Masculin' ? 'checked' : '' }} required>
                                    <div class="gender-card-content">
                                        <i class="fas fa-mars male-icon"></i>
                                        <span>Masculin / Male</span>
                                    </div>
                                </label>
                                <label class="gender-card">
                                    <input type="radio" name="child_gender" value="Féminin" {{ old('child_gender') == 'Féminin' ? 'checked' : '' }}>
                                    <div class="gender-card-content">
                                        <i class="fas fa-venus female-icon"></i>
                                        <span>Féminin / Female</span>
                                    </div>
                                </label>
                            </div>
                            @error('child_gender') <span class="field-error" style="color:red; font-size:12px; margin-top:5px; display:block;">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="child_school">École fréquentée / School Name <span style="color:red">*</span></label>
                            <input type="text" name="child_school" id="child_school" class="form-control" placeholder="Ex: Complexe Scolaire Cardinal Malula" value="{{ old('child_school') }}" required>
                            @error('child_school') <span class="field-error" style="color:red; font-size:12px; margin-top:5px; display:block;">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <!-- Parent Information Section -->
                <div class="form-section">
                    <div class="section-title-wrapper">
                        <div class="section-number">2</div>
                        <div class="section-title-text">
                            <h4>Informations du parent</h4>
                            <span>Parent Information</span>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="parent_name">Nom complet du parent / Parent's Full name <span style="color:red">*</span></label>
                            <input type="text" name="parent_name" id="parent_name" class="form-control" placeholder="Ex: Robert Kabamba" value="{{ old('parent_name') }}" required>
                            @error('parent_name') <span class="field-error" style="color:red; font-size:12px; margin-top:5px; display:block;">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="parent_phone">Numéro de téléphone / Phone number <span style="color:red">*</span></label>
                            <input type="tel" name="parent_phone" id="parent_phone" class="form-control" placeholder="Ex: +243 812 345 678" value="{{ old('parent_phone') }}" required>
                            @error('parent_phone') <span class="field-error" style="color:red; font-size:12px; margin-top:5px; display:block;">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="parent_whatsapp">WhatsApp <span>(Optionnel / Optional)</span></label>
                            <input type="tel" name="parent_whatsapp" id="parent_whatsapp" class="form-control" placeholder="Ex: +243 812 345 678" value="{{ old('parent_whatsapp') }}">
                            @error('parent_whatsapp') <span class="field-error" style="color:red; font-size:12px; margin-top:5px; display:block;">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <!-- Choices Section -->
                <div class="form-section">
                    <div class="section-title-wrapper">
                        <div class="section-number">3</div>
                        <div class="section-title-text">
                            <h4>Choix et Préférences</h4>
                            <span>Selection & Preferences</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Choix de la session / Session Selection <span style="color:red">*</span></label>
                            <div class="session-selector">
                                <label class="session-card">
                                    <input type="checkbox" name="session" value="Session 1 : Du 25 Juin au 25 Août 2026" checked required>
                                    <div class="session-card-content">
                                        <i class="far fa-calendar-alt session-icon"></i>
                                        <div class="session-text-group">
                                            <span class="session-title">Session 1 : Du 25 Juin au 25 Août 2026</span>
                                            <span class="session-subtitle">From June 25 to August 25, 2026</span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            @error('session') <span class="field-error" style="color:red; font-size:12px; margin-top:5px; display:block;">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label>Langue préférée / Preferred language <span style="color:red">*</span></label>
                            <div class="language-selector">
                                <label class="lang-card">
                                    <input type="radio" name="language" value="Français" {{ old('language') == 'Français' ? 'checked' : '' }} required>
                                    <div class="lang-card-content">
                                        <i class="fas fa-language lang-icon"></i>
                                        <span>Français</span>
                                    </div>
                                </label>
                                
                                <label class="lang-card">
                                    <input type="radio" name="language" value="English" {{ old('language') == 'English' ? 'checked' : '' }}>
                                    <div class="lang-card-content">
                                        <i class="fas fa-globe lang-icon"></i>
                                        <span>English</span>
                                    </div>
                                </label>

                                <label class="lang-card">
                                    <input type="radio" name="language" value="Les deux / Both" {{ old('language') == 'Les deux / Both' ? 'checked' : '' }} {{ old('language') ? '' : 'checked' }}>
                                    <div class="lang-card-content">
                                        <i class="fas fa-adjust lang-icon"></i>
                                        <span>Les deux / Both</span>
                                    </div>
                                </label>
                            </div>
                            @error('language') <span class="field-error" style="color:red; font-size:12px; margin-top:5px; display:block;">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <!-- Info / Comment -->
                <div class="form-section">
                    <div class="section-title-wrapper">
                        <div class="section-number">4</div>
                        <div class="section-title-text">
                            <h4>Informations complémentaires</h4>
                            <span>Additional Info</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="comment">Remarques / Observations <span>(Optionnel / Optional)</span></label>
                            <div class="textarea-wrapper">
                                <textarea name="comment" id="comment" class="form-control" rows="3" placeholder="N’hésitez pas à nous laisser un commentaire (ex: allergies, besoins spécifiques) / Please feel free to leave us a comment (e.g. allergies, special needs)">{{ old('comment') }}</textarea>
                            </div>
                            @error('comment') <span class="field-error" style="color:red; font-size:12px; margin-top:5px; display:block;">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group full-width">
                            <label class="confirm-card">
                                <input type="checkbox" name="confirmed" value="1" required>
                                <div class="confirm-card-content">
                                    <span class="confirm-checkbox-box"></span>
                                    <span class="confirm-text">
                                        Je confirme l’inscription de mon enfant au CAMP DE VACANCES EN ROBOTIQUE. <span style="color:red">*</span>
                                        <span class="confirm-subtext">I confirm my child’s registration for the Robotics Holiday Camp.</span>
                                    </span>
                                </div>
                            </label>
                            @error('confirmed') <span class="field-error" style="color:red; font-size:12px; margin-top:5px; display:block;">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="form-submit-wrapper">
                    <button type="submit" class="btn-submit-form">
                        Envoyer l'inscription / Submit Registration
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- POPUP MODAL ON SUCCESS -->
@if(session('tech4school_success'))
<div id="successModal" class="tech-modal-overlay active">
    <div class="tech-modal-card">
        
        <div class="modal-body">
            <h3>Inscription envoyée avec succès !</h3>
            <p>
                Notre équipe vous contactera concernant le paiement.
                <br>
                Nous avons hâte d’accueillir votre enfant pour une aventure technologique amusante et inspirante !
            </p>
            <p>
                Registration Submitted Successfully!
                <br>
                Our team will contact you regarding the payment process.
                <br>
                We can’t wait to welcome your child to an exciting and fun technology adventure!
            </p>
        </div>

        <button class="btn-modal-close" onclick="closeSuccessModal()">Fermer / Close</button>
    </div>
</div>
@endif
@endsection

@section('scripts')
<script>
    // Automatic scroll to form if validation errors exist
    @if($errors->any() || session('error'))
    document.addEventListener('DOMContentLoaded', function () {
        const formSection = document.getElementById('inscription-form-section');
        if (formSection) {
            formSection.scrollIntoView({ behavior: 'smooth' });
        }
    });
    @endif

    // Smooth scrolling to anchors
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Close Modal Script
    function closeSuccessModal() {
        const modal = document.getElementById('successModal');
        if (modal) {
            modal.classList.remove('active');
        }
    }

    // Automatic Slideshow for Hero Header
    document.addEventListener('DOMContentLoaded', function () {
        const slides = document.querySelectorAll('.tech-hero-slide');
        let currentIdx = 0;

        // Lazy load slide images (WebP with JPG fallback)
        function loadSlide(slide) {
            if (!slide) return;
            const webpSrc = slide.getAttribute('data-src-webp');
            const jpgSrc = slide.getAttribute('data-src-jpg');
            
            // Check WebP support
            const img = new Image();
            img.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
            img.onload = img.onerror = function () {
                const supportsWebp = (img.height === 2);
                const finalSrc = supportsWebp ? webpSrc : jpgSrc;
                slide.style.backgroundImage = `url('${finalSrc}')`;
            };
        }

        // Preload next slides
        slides.forEach((slide, idx) => {
            if (idx > 0) {
                loadSlide(slide);
            }
        });

        // Set interval for slides
        setInterval(function () {
            slides[currentIdx].classList.remove('active');
            currentIdx = (currentIdx + 1) % slides.length;
            slides[currentIdx].classList.add('active');
        }, 5000); // Transitions every 5 seconds
    });
</script>
@endsection
