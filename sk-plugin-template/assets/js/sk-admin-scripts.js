// Document Ready
(function ($) {
  let rainbow = `background-image: linear-gradient(to left, violet, indigo, blue, green, orange, red);   -webkit-background-clip: text;
    color: white;  font-size: 20px;`;

  console.log("%cScript Kiddy Admin Scripts Running", rainbow);

  $(document).on("click", ".sk-pending-admin-notice .notice-dismiss", (e) => {
    e.preventDefault();

    const noticeType = e.currentTarget.parentNode.dataset.noticeType;
    console.log(parent);
    $.post(ajaxurl, {
      action: "sk_dismiss_pending_admin_notice",
      notice_type: noticeType,
    }).then((res) => {
      console.log("res:", res);
    });
  });
})(jQuery);
