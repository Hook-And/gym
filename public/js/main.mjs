class Comment {
    constructor(text) {
        this.text = text
        this.votesQty = 0
    }

    upvote() {
        this.votesQty += 1
    }

    static mergeComments(first, second) {
        return `${first} ${second}`
    }
}

const firstComment = new Comment('First comment')
const secondComment = new Comment('Second comment')

firstComment.upvote()

console.log(firstComment)

console.log(firstComment instanceof Object)

console.log(Comment.mergeComments(firstComment.text, secondComment.text))