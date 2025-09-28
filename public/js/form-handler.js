// 共通フォーム処理
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('form');
    const submitBtn = document.getElementById('submit-btn');
    const successMessage = document.getElementById('success-message');

    if (!form || !submitBtn || !successMessage) {
        return; // 必要な要素が存在しない場合は処理を終了
    }


    // フォーム送信処理
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // ボタンをローディング状態に
        submitBtn.classList.add('loading');
        submitBtn.disabled = true;

        // フォームデータを取得
        const formData = new FormData(form);

        // フォームのaction属性から送信先URLを取得
        const actionUrl = form.getAttribute('action');

        // 実際の送信処理
        fetch(actionUrl, {
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
});
