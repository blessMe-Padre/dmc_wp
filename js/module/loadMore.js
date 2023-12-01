export const initLoadMore = () => {
  let hiddenItems = document.querySelectorAll(".band__list li.hidden");
  let visibleItems = document.querySelectorAll(".band__list li.is-visible");

  let loadMoreButton = document.querySelector(".loadMoreButton");
  let hideMoreButton = document.querySelector(".hideMoreButton");
  let loadMoreText = document.querySelector(".loadMoreText");

  let batchSize = 8;
  let currentIndex = 0;

  if (loadMoreButton) {
    loadMoreButton.addEventListener("click", function () {
      let currentBatch = hiddenItems.length - currentIndex > batchSize ? batchSize : hiddenItems.length - currentIndex;

      for (let i = 0; i < currentBatch; i++) {
        hiddenItems[currentIndex].classList.add('is-visible');
        hiddenItems[currentIndex].classList.remove('hidden');
        currentIndex++;
      }

      if (currentIndex >= hiddenItems.length) {
        loadMoreButton.style.display = "none";
        loadMoreText.textContent = "Свернуть";
        hideMoreButton.classList.remove('hidden');
      }
    });
  }

  if (hideMoreButton) {
    hideMoreButton.addEventListener("click", function () {
      let elementsToHide = currentIndex - batchSize > 0 ? batchSize : currentIndex;

      for (let i = currentIndex - 1; i >= currentIndex - elementsToHide; i--) {
        hiddenItems[i].classList.remove('is-visible');
        hiddenItems[i].classList.add('hidden');
      }
      currentIndex -= elementsToHide;

      if (currentIndex <= batchSize) {
        hideMoreButton.classList.add('hide');
      }
      loadMoreButton.style.display = "block";
      loadMoreText.textContent = "Посмотреть еще";
    });
  }
};

export const initLoadMore2 = () => {
  let hiddenItems2 = document.querySelectorAll(".band__list2 li.hidden");
  let visibleItems2 = document.querySelectorAll(".band__list2 li.is-visible");

  let loadMoreButton2 = document.querySelector(".loadMoreButton2");
  let hideMoreButton2 = document.querySelector(".hideMoreButton2");
  let loadMoreText2 = document.querySelector(".loadMoreText2");

  let batchSize = 8;
  let currentIndex = 0;

  if (loadMoreButton2) {
    loadMoreButton2.addEventListener("click", function () {
      let currentBatch = hiddenItems2.length - currentIndex > batchSize ? batchSize : hiddenItems2.length - currentIndex;

      for (let i = 0; i < currentBatch; i++) {
        hiddenItems2[currentIndex].classList.add('is-visible');
        hiddenItems2[currentIndex].classList.remove('hidden');
        currentIndex++;
      }

      if (currentIndex >= hiddenItems2.length) {
        loadMoreButton2.style.display = "none";
        loadMoreText2.textContent = "Свернуть";
        hideMoreButton2.classList.remove('hidden');
      }
    });
  }

  if (hideMoreButton2) {
    hideMoreButton2.addEventListener("click", function () {
      let elementsToHide2 = currentIndex - batchSize > 0 ? batchSize : currentIndex;

      for (let i = currentIndex - 1; i >= currentIndex - elementsToHide2; i--) {
        hiddenItems2[i].classList.remove('is-visible');
        hiddenItems2[i].classList.add('hidden');
      }
      currentIndex -= elementsToHide2;

      if (currentIndex <= batchSize) {
        hideMoreButton2.classList.add('hide');
      }
      loadMoreButton2.style.display = "block";
      loadMoreText2.textContent = "Посмотреть еще";
    });
  }
};