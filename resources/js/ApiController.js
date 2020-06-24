import axios from "axios";
import config from "./Config";

export default {
    api: class {
        constructor() {
            this.subpages = {};
            this.getPages();
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
    }
};
