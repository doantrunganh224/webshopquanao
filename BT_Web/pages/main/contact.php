<!-- contact.php -->
<style>
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: none; /* Hidden by default */
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .popup-content {
        background: #fff;
        padding: 20px;
        width: 50%;
        border-radius: 15px;
        text-align: center;
        position: relative;
    }
    .popup-content .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        font-size: 20px;
        font-weight: bold;
        color: #333;
    }
    .popup-content form input,
    .popup-content form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
</style>

<div class="popup-overlay" id="contactPopupOverlay">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopupCustom()">×</span>
        <h4>Liên hệ CSKH</h4>
        <form action="/BT_Web/pages/main/lienhe.php" method="POST">
            <textarea name="feedback" placeholder="Nhập phản hồi của bạn tại đây..." required></textarea><br>
            <input type="submit" name="send_feedback" value="Gửi">
        </form>
    </div>
</div>

<script>
    // Function to show the contact popup
    function showPopupCustom() {
        document.getElementById("contactPopupOverlay").style.display = "flex";
    }

    // Function to close the contact popup
    function closePopupCustom() {
        document.getElementById("contactPopupOverlay").style.display = "none";
    }
</script>
