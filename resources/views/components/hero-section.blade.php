<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="main-title">ブラジリアン柔術を始めてみませんか？</h1>
                <p class="main-subtitle">
                    ARTA BJJ Mitaでは、初心者から上級者まで、すべてのレベルの方を歓迎しています。<br>
                    経験豊富な指導者が、安全で楽しい環境で柔術を学べるようサポートします。
                </p>
                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary btn-lg">体験レッスン申込み</a>
                    <a href="#about" class="btn btn-outline btn-lg">詳しく見る</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .hero-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    }

    .main-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    .main-subtitle {
        font-size: 1.2rem;
        color: #7f8c8d;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .cta-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .btn {
        padding: 15px 30px;
        font-size: 1rem;
        font-weight: 600;
        text-decoration: none;
        border-radius: 5px;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-primary {
        background-color: #ff6b35;
        color: white;
        border: 2px solid #ff6b35;
    }

    .btn-primary:hover {
        background-color: #e55a2e;
        border-color: #e55a2e;
    }

    .btn-outline {
        background-color: transparent;
        color: #ff6b35;
        border: 2px solid #ff6b35;
    }

    .btn-outline:hover {
        background-color: #ff6b35;
        color: white;
    }

    @media (max-width: 768px) {
        .main-title {
            font-size: 2rem;
        }

        .main-subtitle {
            font-size: 1.1rem;
        }

        .cta-buttons {
            flex-direction: column;
            align-items: center;
        }

        .btn {
            width: 80%;
            max-width: 300px;
        }
    }
</style>
