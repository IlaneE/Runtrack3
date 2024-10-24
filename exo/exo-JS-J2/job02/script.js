let isVisible = false;

        function showhide() {
            const article = document.getElementById("article");
            
            if (!article) {
                // Si l'article n'existe pas, on le crée
                const newArticle = document.createElement("article");
                newArticle.id = "article";
                newArticle.textContent = "L'important n'est pas la chute, mais l'atterrissage.";
                document.body.appendChild(newArticle);
            } else {
                // Si l'article existe, on le supprime
                article.remove();
            }
        }