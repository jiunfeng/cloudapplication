const fs = require('fs');
const axios = require('axios');
const path = require('path');

async function downloadUrls(jsonFilePath, outputDir) {
    try {
        // 读取 JSON 文件
        const response = await axios.get("https://data.moa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx?IsTransData=1&UnitId=193");
        const jsonData = response.data;

        // 创建目录
        if (!fs.existsSync(outputDir)) {
            fs.mkdirSync(outputDir);
        }

        // 下载每个 URL 对应的资源
        for (const item of jsonData) {
            const url = item.url;
            const response = await axios.get(url, { responseType: 'arraybuffer' });
            const content = Buffer.from(response.data);
            const fileName = path.join(outputDir, `item_${item.id}.jpg`);
            fs.writeFileSync(fileName, content);
            console.log(`Downloaded: ${url} -> ${fileName}`);
        }

        console.log('Download complete.');
    } catch (error) {
        console.error('Error:', error.message);
    }
}

// 使用例子
const jsonFilePath = 'data.json'; // 替换为你的 JSON 文件路径
const outputDir = 'downloaded_images'; // 替换为你想保存的目录路径
downloadUrls(jsonFilePath, outputDir);