# Symptoms - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Symptoms**

## CodeSystem: Symptoms 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Symptoms | *Version*:2.14.0 |
| Active as of 2022-07-11 | *Computable Name*:Symptoms |

 
Symptoms 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SymptomerMikrovaskulaer](ValueSet-SymptomerMikrovaskulaer.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Symptoms",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Symptoms",
  "version" : "2.14.0",
  "name" : "Symptoms",
  "title" : "Symptoms",
  "status" : "active",
  "date" : "2022-07-11T00:00:00+02:00",
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
  "description" : "Symptoms",
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "visual_disorders",
      "display" : "Visual disorders",
      "definition" : "Visual disorders / Synsforstyrrelser"
    },
    {
      "code" : "dizziness",
      "display" : "Dizziness",
      "definition" : "Dizziness / Svimmelhed"
    },
    {
      "code" : "headache",
      "display" : "Headache",
      "definition" : "Headache / Hovedpine"
    },
    {
      "code" : "erythromelalgia",
      "display" : "Erythromelalgia",
      "definition" : "Erythromelalgia / Erythromelagi"
    },
    {
      "code" : "necrosis",
      "display" : "Necrosis",
      "definition" : "Necrosis / Nekrose; sårdannelse"
    }
  ]
}

```
