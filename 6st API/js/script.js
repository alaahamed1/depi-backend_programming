async function getPosts() {
    // URL in variable step(1)
    let url = "https://jsonplaceholder.typicode.com/posts";
    
    // Check URL using fetch
    try {
        const response = await fetch(url);
        const data = await response.json();
        console.log(data);

        // Display the data
        displayPosts(data);
    } catch (err) {
        console.log(err);
    }
}

// Function to display posts
function displayPosts(posts) {
    const postsContainer = document.getElementById('posts-container');
    
    // Clear any existing content
    postsContainer.innerHTML = '';

    // Loop through the posts and create HTML elements
    posts.forEach(post => {
        const postElement = document.createElement('div');
        postElement.classList.add('col-md-4', 'mb-4');

        postElement.innerHTML = `
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">${post.title}</h5>
                    <p class="card-text">${post.body}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        `;

        postsContainer.appendChild(postElement);
    });
}

// Call function getPosts
getPosts();
