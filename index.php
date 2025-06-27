<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Serif%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Stitch Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden" style='font-family: "Noto Serif", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7edf3] px-10 py-3">
          <div class="flex items-center gap-4 text-[#0e151b]">
            <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M42.4379 44C42.4379 44 36.0744 33.9038 41.1692 24C46.8624 12.9336 42.2078 4 42.2078 4L7.01134 4C7.01134 4 11.6577 12.932 5.96912 23.9969C0.876273 33.9029 7.27094 44 7.27094 44L42.4379 44Z"
                  fill="currentColor"
                ></path>
              </svg>
            </div>
            <h2 class="text-[#0e151b] text-lg font-bold leading-tight tracking-[-0.015em]">Tailored Threads</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
              <a class="text-[#0e151b] text-sm font-medium leading-normal" href="#">Services</a>
              <a class="text-[#0e151b] text-sm font-medium leading-normal" href="#">About</a>
              <a class="text-[#0e151b] text-sm font-medium leading-normal" href="#">Contact</a>
            </div>
            <button
              class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#e7edf3] text-[#0e151b] text-sm font-bold leading-normal tracking-[0.015em]"
            >
              <span class="truncate">Book Appointment</span>
            </button>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="@container">
              <div class="@[480px]:p-4">
                <div
                  class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-start justify-end px-4 pb-10 @[480px]:px-10"
                  style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuC-RjVfDww7XZvpgHrPaq15BKYgZjRQqklG4pFfcSfDwguk0w0L9fCOkkRTVgNJUSxq4jtUPp3R0ec-v_3PQJsD0Ird8twV3E-Ej2kwgZIuDhFUEXNBLjHjfimSQBBum1dIbYYB8afNA0vp5e_kmp86EVSq6JQlInevBFwGxmt_OqRb-y504QvbMMxNHYkeXhsxq3RiKxtLluwNONU7k4Oh4OQTZRzeL6Ea4HrbxZ3fFqf4ztjL_LTioLp4W7ODc-hP_1E2PqmnE6M");'
                >
                  <div class="flex flex-col gap-2 text-left">
                    <h1
                      class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]"
                    >
                      Crafting Your Perfect Fit
                    </h1>
                    <h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                      Experience the art of bespoke tailoring with Tailored Threads. Our expert tailors create garments that perfectly reflect your style and fit.
                    </h2>
                  </div>
                  <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#1473cc] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]"
                  >
                    <span class="truncate">Book Appointment</span>
                  </button>
                </div>
              </div>
            </div>
            <h2 class="text-[#0e151b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Our Services</h2>
            <div class="flex flex-col gap-10 px-4 py-10 @container">
              <div class="flex flex-col gap-4">
                <h1
                  class="text-[#0e151b] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
                >
                  Expert Tailoring Services
                </h1>
                <p class="text-[#0e151b] text-base font-normal leading-normal max-w-[720px]">
                  We offer a range of tailoring services to meet your needs, from custom-made suits to precise alterations.
                </p>
              </div>
              <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-0">
                <div class="flex flex-1 gap-3 rounded-lg border border-[#d0dce7] bg-slate-50 p-4 flex-col">
                  <div class="text-[#0e151b]" data-icon="Scissors" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M157.73,113.13A8,8,0,0,1,159.82,102L227.48,55.7a8,8,0,0,1,9,13.21l-67.67,46.3a7.92,7.92,0,0,1-4.51,1.4A8,8,0,0,1,157.73,113.13Zm80.87,85.09a8,8,0,0,1-11.12,2.08L136,137.7,93.49,166.78a36,36,0,1,1-9-13.19L121.83,128,84.44,102.41a35.86,35.86,0,1,1,9-13.19l143,97.87A8,8,0,0,1,238.6,198.22ZM80,180a20,20,0,1,0-5.86,14.14A19.85,19.85,0,0,0,80,180ZM74.14,90.13a20,20,0,1,0-28.28,0A19.85,19.85,0,0,0,74.14,90.13Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#0e151b] text-base font-bold leading-tight">Custom Tailoring</h2>
                    <p class="text-[#4d7499] text-sm font-normal leading-normal">
                      Create a unique garment tailored to your exact specifications. Choose from a wide selection of fabrics and styles.
                    </p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#d0dce7] bg-slate-50 p-4 flex-col">
                  <div class="text-[#0e151b]" data-icon="Needle" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M189.66,66.34a8,8,0,0,1,0,11.32l-16,16a8,8,0,0,1-11.32-11.32l16-16A8,8,0,0,1,189.66,66.34ZM224,72a39.71,39.71,0,0,1-11.72,28.28l-24,24a8,8,0,0,1-4.3,2.23c-51.49,8.84-137.46,94.28-138.32,95.15h0a8,8,0,0,1-11.31-11.32h0C36,208.73,120.69,123.28,129.49,72a8,8,0,0,1,2.23-4.3l24-24A40,40,0,0,1,224,72Zm-16,0a24,24,0,0,0-41-17L144.77,77.29c-4.41,21.15-18.9,46.19-35.49,69.43,23.24-16.59,48.28-31.08,69.43-35.49L201,89A23.85,23.85,0,0,0,208,72Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#0e151b] text-base font-bold leading-tight">Alterations</h2>
                    <p class="text-[#4d7499] text-sm font-normal leading-normal">
                      Ensure your clothes fit perfectly with our expert alteration services. We handle everything from minor adjustments to major restyling.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="text-[#0e151b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Contact Us</h2>
            <p class="text-[#0e151b] text-base font-normal leading-normal pb-3 pt-1 px-4">
              Visit our shop or contact us to discuss your tailoring needs. We are located at 123 Fashion Avenue, Style City, and can be reached at (555) 123-4567 or via email at
              contact@tailoredthreads.com.
            </p>
          </div>
        </div>
        <footer class="flex justify-center">
          <div class="flex max-w-[960px] flex-1 flex-col">
            <footer class="flex flex-col gap-6 px-5 py-10 text-center @container">
              <div class="flex flex-wrap justify-center gap-4">
                <a href="#">
                  <div class="text-[#4d7499]" data-icon="InstagramLogo" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"
                      ></path>
                    </svg>
                  </div>
                </a>
                <a href="#">
                  <div class="text-[#4d7499]" data-icon="FacebookLogo" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm8,191.63V152h24a8,8,0,0,0,0-16H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,0-16H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0,0,16h24v63.63a88,88,0,1,1,16,0Z"
                      ></path>
                    </svg>
                  </div>
                </a>
              </div>
              <p class="text-[#4d7499] text-base font-normal leading-normal">© 2024 Tailored Threads. All rights reserved.</p>
            </footer>
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>
