const disparaToast = new URLSearchParams(window.location.search).get('process');
const divoToast = document.getElementById('toastDiv');

if (disparaToast === "1") {
    let conteudoToast = `
        <div id="liveToast" class="toast bg-success text-light" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="../assets/img/10558234_11zon.jpg" class="rounded me-2" alt="..." height="15pix">
                <strong class="me-auto" >Sucesso</strong>
                <small><strong>A operação foi realizada</strong></small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                O registro foi processado com sucesso!!!
            </div>
        </div>
    `;
    divoToast.innerHTML = conteudoToast;
    const toastEl = document.getElementById('liveToast');
    const toast = new bootstrap.Toast(toastEl);
    toast.show();
} else if (disparaToast === "0") {
    let conteudoToast = `
        <div id="liveToast" class="toast bg-danger text-light" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="../assets/img/download_11zon.jpg" class="rounded me-2" alt="..." height="15pix">
                <strong class="me-auto" >Erro</strong>
                <small><strong>A operação não foi realizada</strong></small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                O registro não foi processado com sucesso!!!
            </div>
        </div>
    `;
    divoToast.innerHTML = conteudoToast;
    const toastEl = document.getElementById('liveToast');
    const toast = new bootstrap.Toast(toastEl);
    toast.show();
}
