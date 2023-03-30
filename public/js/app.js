function storyCardClickHandler(event) {
    const cardKey = event.currentTarget.dataset.key;
    window.location.href = `story/${cardKey}`;
}
