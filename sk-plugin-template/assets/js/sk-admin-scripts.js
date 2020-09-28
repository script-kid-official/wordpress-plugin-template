// Document Ready
(function ($) {
  let rainbow = `background-image: linear-gradient(to left, violet, indigo, blue, green, orange, red);   -webkit-background-clip: text;
    color: white;  font-size: 20px;`;

  console.log("%cScript Kiddy Admin Scripts Running", rainbow);

  document.body.addEventListener(
    "click",
    (evt) => {
      const target = evt.target;
      const parent = target.parentElement;

      if (parent.classList.contains("ubu-link-builder-notice")) {
        const requestOptions = {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded; charset=utf-8",
          },
          body:
            "action=ubu_dismiss_pending_admin_notice&notice_type=" +
            parent.dataset.noticeType,
        };

        // @ts-ignore
        fetch(ajaxurl, requestOptions);
      }
    },
    false
  );
})(jQuery);
