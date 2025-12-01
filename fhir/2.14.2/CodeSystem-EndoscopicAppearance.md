# Endoscopic appearance - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Endoscopic appearance**

## CodeSystem: Endoscopic appearance 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/EndoscopicAppearance | *Version*:2.14.2 |
| Active as of 2022-08-22 | *Computable Name*:EndoscopicAppearance |

 
Endoscopic appearance 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EndoskopiskUdseende](ValueSet-EndoskopiskUdseende.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "EndoscopicAppearance",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/EndoscopicAppearance",
  "version" : "2.14.2",
  "name" : "EndoscopicAppearance",
  "title" : "Endoscopic appearance",
  "status" : "active",
  "date" : "2022-08-22T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Endoscopic appearance",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "stalk",
      "display" : "Stalked",
      "definition" : "Stalked / Stilket"
    },
    {
      "code" : "broad",
      "display" : "Broad based",
      "definition" : "Broad based / Bredbaset"
    },
    {
      "code" : "non_polypoid",
      "display" : "Non-polypoid",
      "definition" : "Non-polypoid"
    }
  ]
}

```
