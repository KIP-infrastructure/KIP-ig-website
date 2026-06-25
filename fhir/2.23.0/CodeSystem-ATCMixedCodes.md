# WHO ATC; Mixed codes - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **WHO ATC; Mixed codes**

## CodeSystem: WHO ATC; Mixed codes 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ATCMixedCodes | *Version*:2.23.0 |
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
  "version" : "2.23.0",
  "name" : "ATCMixedCodes",
  "title" : "WHO ATC; Mixed codes",
  "status" : "active",
  "date" : "2022-07-14T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "WHO ATC code system; Mixed codes. Link: http://www.whocc.no/atc",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 6,
  "property" : [{
    "code" : "comment",
    "uri" : "http://hl7.org/fhir/concept-properties#comment",
    "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
    "type" : "string"
  },
  {
    "code" : "effectiveDate",
    "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
    "description" : "The date at which the concept status was last changed",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
    "type" : "code"
  },
  {
    "code" : "inactive",
    "uri" : "http://hl7.org/fhir/concept-properties#inactive",
    "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
    "type" : "boolean"
  }],
  "concept" : [{
    "code" : "tki",
    "display" : "TKI (Tyrosine kinase inhibitors)",
    "definition" : "TKI (Tyrosine kinase inhibitors)",
    "concept" : [{
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
    }]
  }]
}

```
