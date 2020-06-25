import axios from "axios";
import config from "./Config";

export default {
    api: class {
        constructor() {
            this.subpages = {};
            this.news = {};
            this.comments = [];
            this.getPages();
            this.getNews();
        }

        getPages() {
            axios
                .get(config.config.serverAdress + "api/content")
                .then(res => {
                    res.data.forEach(page => {
                        this.subpages[page.name] = page;
                    });
                })
                .catch(err => console.log(err));
        };

        getNews() {
            axios
                .get(config.config.serverAdress + "api/news")
                .then(res => {
                    this.news = res.data
                })
                .catch(err => console.log(err));
        }

        getComments(id) {
            axios.post(config.config.serverAdress + 'api/comments', {
                    articleID: id
                })
                .then(function (response) {
                    this.comments = response.data;
                })
                .catch(function (error) {
                    console.log(error.response);
                });
        }
    }
};
