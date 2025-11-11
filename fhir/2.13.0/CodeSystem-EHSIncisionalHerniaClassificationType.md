# EHS - Incisional hernia classification type - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EHS - Incisional hernia classification type**

## CodeSystem: EHS - Incisional hernia classification type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/EHSIncisionalHerniaClassificationType | *Version*:2.13.0 |
| Active as of 2023-07-13 | *Computable Name*:EHSIncisionalHerniaClassificationType |

 
EHS (European Hernia Society) - Incisional hernia classification type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EHSVentralHernieType](ValueSet-EHSVentralHernieType.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "EHSIncisionalHerniaClassificationType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/EHSIncisionalHerniaClassificationType",
  "version" : "2.13.0",
  "name" : "EHSIncisionalHerniaClassificationType",
  "title" : "EHS - Incisional hernia classification type",
  "status" : "active",
  "date" : "2023-07-13T00:00:00+02:00",
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
  "description" : "EHS (European Hernia Society) - Incisional hernia classification type",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "ehsll",
      "display" : "EHS Lateral Left",
      "definition" : "EHS Klassifikation Lateral - Venstre"
    },
    {
      "code" : "ehsm",
      "display" : "EHS Midline",
      "definition" : "EHS Klassifikation - Midtlinje"
    },
    {
      "code" : "ehslr",
      "display" : "EHS Lateral Right",
      "definition" : "EHS Klassifikation Lateral - Højre"
    }
  ]
}

```
