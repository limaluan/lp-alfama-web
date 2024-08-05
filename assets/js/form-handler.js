document
  .getElementById("desktop-form")
  .addEventListener("submit", async function (event) {
    event.preventDefault();

    const formData = new FormData(this);

    const response = await fetch("mail/mail.php", {
      method: "POST",
      body: formData,
    });
    document.getElementById("desktop-form").reset();

    return console.log(response);
  });

document
  .getElementById("mobile-form")
  .addEventListener("submit", async function (event) {
    event.preventDefault();

    const formData = new FormData(this);

    const response = await fetch("mail/mail.php", {
      method: "POST",
      body: formData,
    });
    document.getElementById("mobile-form").reset();

    return console.log(response);
  });
