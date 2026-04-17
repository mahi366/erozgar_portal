document.addEventListener("DOMContentLoaded", () => {
  const studentSelect = document.getElementById("studentSelect");
  const hiddenName = document.getElementById("studentNameHidden");
  const form = document.getElementById("issueCertForm");
  const result = document.getElementById("issueResult");

  // 1) load students for dropdown (admin only)
  fetch("backend/api_admin_students.php")
    .then(r => r.json())
    .then(res => {
      if (!res.ok) return;
      res.data.forEach(s => {
        const opt = document.createElement("option");
        opt.value = s.id;
        opt.textContent = `${s.full_name} (${s.email})`;
        studentSelect.appendChild(opt);
      });
    });

  // keep student name in hidden field
  studentSelect.addEventListener("change", () => {
    const text = studentSelect.options[studentSelect.selectedIndex]?.textContent || "";
    hiddenName.value = text.split("(")[0].trim();
  });

  // 2) issue certificate
  form.addEventListener("submit", (e) => {
    e.preventDefault();

    const fd = new FormData(form);
    if (!hiddenName.value) {
      const text = studentSelect.options[studentSelect.selectedIndex]?.textContent || "";
      hiddenName.value = text.split("(")[0].trim();
      fd.set("student_name", hiddenName.value);
    }

    fetch("backend/admin_issue_certificate.php", { method: "POST", body: fd })
      .then(r => r.json())
      .then(res => {
        if (!res.ok) {
          result.textContent = "Error: missing fields";
          return;
        }
        const link = `certificate.html?cid=${encodeURIComponent(res.cert_id)}`;
        result.innerHTML = `Issued ✅  <a href="${link}" target="_blank">${link}</a>`;
      })
      .catch(() => result.textContent = "Server error");
  });
});
