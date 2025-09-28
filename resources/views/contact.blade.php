@extends('layouts.website')

@section('content')

<style>
/* モダンなコンタクトフォームのスタイル */
.contact-container {
    display: flex;
    align-items: center;
    justify-content: center;
}


.contact-form-wrapper {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border-radius: 24px;
    padding: 50px;
    box-shadow:
        0 25px 50px rgba(0, 0, 0, 0.15),
        0 0 0 1px rgba(255, 255, 255, 0.2);
    max-width: 600px;
    width: 100%;
    position: relative;
    z-index: 1;
    transform: translateY(0);
    transition: all 0.3s ease;
}


.contact-title {
    text-align: center;
    margin-bottom: 40px;
    position: relative;
}

.contact-title h1 {
    font-size: 2.5rem;
    font-weight: 700;
    background: linear-gradient(135deg, #111, #8b9534);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin: 0;
    position: relative;
}

.contact-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 300px;
    height: 4px;
    background: linear-gradient(135deg, #111, #8b9534);
    border-radius: 2px;
}

.form-group {
    margin-bottom: 30px;
    position: relative;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 16px 20px;
    border: 2px solid #e1e5e9;
    border-radius: 12px;
    font-size: 1rem;
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    box-sizing: border-box;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
    transform: translateY(-2px);
}

.form-group input:hover,
.form-group textarea:hover {
    border-color: #667eea;
    transform: translateY(-1px);
}

.form-group textarea {
    min-height: 120px;
    resize: vertical;
}

/* アニメーション効果 */
.form-group {
    opacity: 0;
    transform: translateY(30px);
    animation: slideInUp 0.6s ease forwards;
}

.form-group:nth-child(1) { animation-delay: 0.1s; }
.form-group:nth-child(2) { animation-delay: 0.2s; }
.form-group:nth-child(3) { animation-delay: 0.3s; }
.form-group:nth-child(4) { animation-delay: 0.4s; }

@keyframes slideInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.contact-title {
    opacity: 0;
    transform: translateY(-30px);
    animation: slideInDown 0.6s ease forwards;
}

@keyframes slideInDown {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* レスポンシブデザイン */
@media (max-width: 768px) {
    .contact-form-wrapper {
        padding: 30px 20px;
        margin: 20px;
    }

    .contact-title h1 {
        font-size: 2rem;
    }

    .form-group input,
    .form-group textarea {
        padding: 14px 16px;
    }

    .submit-btn {
        padding: 16px 24px;
        font-size: 1rem;
    }
}

/* 成功メッセージのスタイル */
.success-message {
    background: linear-gradient(135deg, #4ade80, #22c55e);
    color: white;
    padding: 16px 24px;
    border-radius: 12px;
    margin-bottom: 20px;
    text-align: center;
    font-weight: 600;
    opacity: 0;
    transform: translateY(-20px);
    transition: all 0.3s ease;
}

.success-message.show {
    opacity: 1;
    transform: translateY(0);
}

/* ローディングアニメーション */
.loading {
    position: relative;
    color: transparent;
}

.loading::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 20px;
    height: 20px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-top: 2px solid white;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: translate(-50%, -50%) rotate(0deg); }
    100% { transform: translate(-50%, -50%) rotate(360deg); }
}
</style>

{{-- モダンなコンタクトフォーム --}}
<section class="contact-container">
    <div class="contact-form-wrapper">
        <div class="contact-title">
            <h1>お問い合わせ</h1>
        </div>

        <div id="success-message" class="success-message" style="display: none;">
            メッセージを送信しました！ありがとうございます。
        </div>

        <form action="" method="post" id="contact-form">
            @csrf
            <div class="form-group">
                <label for="name">お名前</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="message">メッセージ</label>
                <textarea name="message" id="message" placeholder="お気軽にお問い合わせください..." required></textarea>
            </div>

            <div class="flex-center-center">
                <button type="submit" class="submit-btn" id="submit-btn">
                    送信する
                </button>
            </div>
        </form>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const submitBtn = document.getElementById('submit-btn');
    const successMessage = document.getElementById('success-message');

    // フォーム送信処理
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // ボタンをローディング状態に
        submitBtn.classList.add('loading');
        submitBtn.disabled = true;

        // フォームデータを取得
        const formData = new FormData(form);

        // 実際の送信処理
        fetch('/contact', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            // ローディング状態を解除
            submitBtn.classList.remove('loading');
            submitBtn.disabled = false;

            if (data.success) {
                // 成功メッセージを表示
                successMessage.textContent = data.message;
                successMessage.style.display = 'block';
                successMessage.classList.add('show');

                // フォームをリセット
                form.reset();

                // 3秒後に成功メッセージを非表示
                setTimeout(() => {
                    successMessage.classList.remove('show');
                    setTimeout(() => {
                        successMessage.style.display = 'none';
                    }, 300);
                }, 3000);
            } else {
                // エラーメッセージを表示
                alert(data.message);
            }
        })
        .catch(error => {
            // ローディング状態を解除
            submitBtn.classList.remove('loading');
            submitBtn.disabled = false;

            // エラーメッセージを表示
            alert('申し訳ございません。送信に失敗しました。しばらく時間をおいて再度お試しください。');
            console.error('Error:', error);
        });
    });

    // 入力フィールドのアニメーション効果
    const inputs = document.querySelectorAll('input, textarea');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'scale(1.02)';
        });

        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'scale(1)';
        });
    });

    // ページ読み込み時のアニメーション
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        group.style.animationDelay = `${(index + 1) * 0.1}s`;
    });
});
</script>

@endsection

@include('components.styles')
@include('components.scripts')
