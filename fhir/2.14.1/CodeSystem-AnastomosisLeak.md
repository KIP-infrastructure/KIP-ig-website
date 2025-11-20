# Anastomosis leak - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anastomosis leak**

## CodeSystem: Anastomosis leak 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisLeak | *Version*:2.14.1 |
| Active as of 2022-06-07 | *Computable Name*:AnastomosisLeak |

 
Anastomosis Leak 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Anastomoselaekage](ValueSet-Anastomoselaekage.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AnastomosisLeak",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisLeak",
  "version" : "2.14.1",
  "name" : "AnastomosisLeak",
  "title" : "Anastomosis leak",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Anastomosis Leak",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "conservative",
      "display" : "Konservativ",
      "definition" : "Konservativ"
    },
    {
      "code" : "endoscopic",
      "display" : "Endoskopisk",
      "definition" : "Endoskopisk"
    },
    {
      "code" : "surgical",
      "display" : "Kirurgisk",
      "definition" : "Kirurgisk"
    }
  ]
}

```
