<div class="chat-app">
  <div class="d-flex flex-nowrap">
    <div class="order-1">
      <div class="c-list">
        <div class="input-group mb-2">
          <input type="text" class="form-control mb-1" placeholder="Search...">
        </div>
        <!-- <ul class="nav nav-tabs tab-page-toolbar rounded text-center mb-1" role="tablist"> -->
        <!-- <li class="flex-fill nav-item"><a class="nav-link border-0 active" data-bs-toggle="tab" href="app-chat.html#chat-recent" role="tab" aria-selected="false">Chat</a></li> -->
        <!-- <li class="flex-fill nav-item"><a class="nav-link border-0 active" data-bs-toggle="tab" href="app-chat.html#chat-groups" role="tab" aria-selected="true">Suggestions</a></li> -->
        <!-- <li class="flex-fill nav-item"><a class="nav-link border-0 " data-bs-toggle="tab" href="app-chat.html#chat-contact" role="tab" aria-selected="false">Contact</a></li> -->
        <!-- </ul> -->
      </div>
      <div class="tab-content border-top custom_scroll">
        <div class="tab-pane fade active show" id="chat-groups" role="tabpanel">
          <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
            <li class="list-group-item">
              <a href="javascript:void(0);" class="d-flex">
                <div class="avatar rounded-circle no-thumbnail">AI</div>
                <div class="flex-fill ms-3 text-truncate">
                  <h6 class="d-flex justify-content-between mb-0"><span>Ai Assistant</span> <small class="msg-time">9/10/2020</small></h6>
                  <span class="text-muted">Hi Aiden, How May i Help You.</span>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="order-2 flex-grow-1 custom_scroll">
      <div class="tab-content">
        <div class="tab-pane fade show active" id="Chris_Fox" role="tabpanel">
          <!-- Chat: Header -->
          <div class="py-xl-3 py-3 px-xxl-5 px-lg-4 px-3 chat-header">
            <a class="d-flex color-600" href="javascript:void(0);" title="">
              <img class="avatar rounded-circle" src="/Public/assets/img/xs/avatar1.jpg" alt="avatar">
              <div class="ms-3">
                <h6 class="mb-0">Ai Assistant</h6>
                <small class="text-muted">Last seen: Online</small>
              </div>
            </a>
          </div>
          <!-- Chat: body -->
          <div class="chat-history custom_scroll">
            <!-- Search: div -->
            <div class="collapse bg-dark" id="chat-search">
              <div class="input-group py-2 px-xxl-5 px-lg-4 px-3">
                <input type="text" class="form-control border-0 p-0 bg-transparent" placeholder="Search. Components, Layouts, etc...">
                <div class="input-group-append ms-3">
                  <button class="btn btn-light" type="submit">Search</button>
                </div>
              </div>
            </div>
            <ul id="chatContainer" class="py-xl-3 py-2 px-xxl-5 px-lg-4 px-3 list-unstyled mb-0">

  
              
              <!-- Chat: Right -->
              <li class="mb-3 d-flex flex-row-reverse align-items-end">
                <div class="max-width-70">
                  <div class="user-info mb-1">
                    <img class="avatar xs rounded-circle me-1" src="/Public/assets/img/xs/avatar2.jpg" alt="avatar">
                    <span class="text-muted small">10:13 AM, Today</span>
                  </div>
                  <div class="card p-3 bg-primary text-white">
                    <div class="message">What is your sales forecast for next week?</div>
                  </div>
                </div>
              </li>
              <!-- Chat: left -->
              <li class="mb-3 d-flex flex-row align-items-end">
                <div class="max-width-70">
                  <div class="user-info mb-1">
                    <img class="avatar xs rounded-circle me-1" src="/Public/assets/img/xs/avatar1.jpg" alt="avatar">
                    <span class="text-muted small">10:10 AM, Today</span>
                  </div>
                  <div class="card p-3">

                    <div class="message">There will be a concert at the Ottawa City Stadium next Thursday, and it is expected to have a large turnout. Our sales on Thursday are expected to be above $4500 on average. <br>
                      Temperatures will also be above 20°C, except for Tuesday and Wednesday, so we expect a busy week overall.
                    </div>
                  </div>
                </div>
              </li>
              <!-- Chat: Right -->
              <li class="mb-3 d-flex flex-row-reverse align-items-end">
                <div class="max-width-70">
                  <div class="user-info mb-1">
                    <img class="avatar xs rounded-circle me-1" src="/Public/assets/img/xs/avatar2.jpg" alt="avatar">
                    <span class="text-muted small">10:13 AM, Today</span>
                  </div>
                  <div class="card p-3 bg-primary text-white">
                    <div class="message">Potatoes and seafood stocks seem insufficient at the moment,  We should replenish them. </div>
                  </div>
                </div>
              </li>
              <!-- Chat: left -->
              <li class="mb-3 d-flex flex-row align-items-end">
                <div class="max-width-70">
                  <div class="user-info mb-1">
                    <img class="avatar xs rounded-circle me-1" src="/Public/assets/img/xs/avatar1.jpg" alt="avatar">
                    <span class="text-muted small">10:13 AM, Today</span>
                  </div>
                  <div class="card p-3">
                    <div class="message">
                    We have some staff on leave, but we can manage the week with our current team. We just need to inform them that it will be a busy week. Would you like me to prepare a motivational speech for the staff? 
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- Chat: Footer -->
          <div class="py-xl-3 py-2 px-xxl-5 px-lg-4 px-3 chat-msg">
            <div class="btn btn-link file-input">
              <input type="file" class="form-control" name="file-input" id="file-input">
              <label for="file-input" class="fa fa-paperclip"></label>
            </div>
            <input type="text" id="inputField" class="form-control bg-transparent border-0" placeholder="Enter text here...">
            <button id="generateButton" class="btn bg-secondary text-light text-uppercase" type="button">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $('.chat-app .chatlist-toggle').on('click', function() {
    $('.chat-app .order-1').toggleClass('open');
  });

  let generateButton = document.getElementById('generateButton');
  let inputField = document.getElementById('inputField');
  let outputField = document.getElementById('chatContainer');

  const chatLeft = (text) => outputField.innerHTML += `<li class="mb-3 d-flex flex-row align-items-end">
                <div class="max-width-70">
                  <div class="user-info mb-1">
                    <img class="avatar xs rounded-circle me-1" src="/Public/assets/img/xs/avatar1.jpg" alt="avatar">
                    <span class="text-muted small">10:10 AM, Today</span>
                  </div>
                  <div class="card p-3">
                    <div class="message"> ${text}</div>
                  </div>
                </div>
              </li>`
  const chatRight = (text) => outputField.innerHTML += ` <li class="mb-3 d-flex flex-row-reverse align-items-end">
                <div class="max-width-70 text-end">
                  <div class="user-info mb-1">
                    <span class="text-muted small">10:12 AM, Today</span>
                  </div>
                  <div class="card border-0 p-3 bg-primary text-light">
                    <div class="message">${text}</div>
                  </div>
                </div>
              </li>`
  
  generateButton.addEventListener('click', async () => {
    const prompt = inputField.value;
    inputField.value = ""
    try {
      generateButton.disabled = true
      generateButton.textContent = "Typing..."
      chatRight(prompt)
      const response = await axios.post('/ai', {
        prompt
      }, {
        headers: {
          'Content-Type': 'application/json'
        }
      });
      const data = await response.data
      generateButton.disabled = false
      generateButton.textContent = "Send"
      chatLeft(data)
      console.log(data)
      // outputField.textContent = data.text;
    } catch (error) {

      generateButton.textContent = "Send"
      generateButton.disabled = false
      console.log(error);
      // Handle error, e.g., display an error message
    }
  });
</script>