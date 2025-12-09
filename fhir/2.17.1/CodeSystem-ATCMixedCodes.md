# WHO ATC; Mixed codes - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **WHO ATC; Mixed codes**

## CodeSystem: WHO ATC; Mixed codes 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ATCMixedCodes | *Version*:2.17.1 |
| Active as of 2022-07-14 | *Computable Name*:ATCMixedCodes |

 
WHO ATC code system; Mixed codes. Link: http://www.whocc.no/atc 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BehandlingCML](ValueSet-BehandlingCML.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ATCMixedCodes",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ATCMixedCodes",
  "version" : "2.17.1",
  "name" : "ATCMixedCodes",
  "title" : "WHO ATC; Mixed codes",
  "status" : "active",
  "date" : "2022-07-14T00:00:00+02:00",
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
  "description" : "WHO ATC code system; Mixed codes. Link: http://www.whocc.no/atc",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "tki",
      "display" : "TKI (Tyrosine kinase inhibitors)",
      "definition" : "TKI (Tyrosine kinase inhibitors)",
      "concept" : [
        {
          "code" : "L01EA",
          "display" : "BCR-ABL tyrosine kinase inhibitors"
        },
        {
          "code" : "L01EB",
          "display" : "Epidermal growth factor receptor (EGFR) tyrosine kinase inhibitors"
        },
        {
          "code" : "L01EH",
          "display" : "Human epidermal growth factor receptor 2 (HER2) tyrosine kinase inhibitors"
        },
        {
          "code" : "L01EK",
          "display" : "Vascular endothelial growth factor receptor (VEGFR) tyrosine kinase inhibitors"
        },
        {
          "code" : "L01EN",
          "display" : "Fibroblast growth factor receptor (FGFR) tyrosine kinase inhibitors"
        }
      ]
    }
  ]
}

```
