   
    document.getElementById("commentForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent form submission
      
      
      var name = document.getElementById("name").value;
      var comment = document.getElementById("comment").value;
      
      
      var newComment = document.createElement("div");
      newComment.classList.add("comment");
      
      var commentContent = document.createElement("p");
      commentContent.innerHTML = "<strong>" + name + ":</strong> " + comment;
      
      var deleteBtn = document.createElement("button");
      deleteBtn.innerText = "Delete";
      deleteBtn.classList.add("delete-btn");
      
      
      deleteBtn.addEventListener("click", function() {
        newComment.remove();
      });
      
      newComment.appendChild(commentContent);
      newComment.appendChild(deleteBtn);
      
     
      var commentSection = document.getElementById("commentSection");
      commentSection.appendChild(newComment);
      
      
      document.getElementById("name").value = "";
      document.getElementById("comment").value = "";
    });
    
    
    document.querySelector(".cancel-btn").addEventListener("click", function() {
      document.getElementById("name").value = "";
      document.getElementById("comment").value = "";
    });