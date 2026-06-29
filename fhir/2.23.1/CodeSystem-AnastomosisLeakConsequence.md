# Anastomosis leak consequence - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anastomosis leak consequence**

## CodeSystem: Anastomosis leak consequence 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisLeakConsequence | *Version*:2.23.1 |
| Active as of 2022-08-22 | *Computable Name*:AnastomosisLeakConsequence |

 
Anastomosis leak consequence 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AnastomoselaekageKonsekvens](ValueSet-AnastomoselaekageKonsekvens.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AnastomosisLeakConsequence",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisLeakConsequence",
  "version" : "2.23.1",
  "name" : "AnastomosisLeakConsequence",
  "title" : "Anastomosis leak consequence",
  "status" : "active",
  "date" : "2022-08-22T00:00:00+02:00",
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
  "description" : "Anastomosis leak consequence",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 7,
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
    "code" : "preserved",
    "display" : "Anastomosis preserved",
    "definition" : "Anastomosis preserved / Anastomosen bevaret"
  },
  {
    "code" : "preserved_surture",
    "display" : "Anastomosis preserved, surturing of defect",
    "definition" : "Anastomosis preserved, surturing of defect / Anastomose bevaret, oversyning af defekt"
  },
  {
    "code" : "preserved_endosponge_vac",
    "display" : "Anastomosis preserved; endosponge/VAC",
    "definition" : "Anastomosis preserved, endosponge/VAC / Anastomose bevaret, endosponge/VAC beh"
  },
  {
    "code" : "preserved_drain_antibiotics",
    "display" : "Anastomosis preserved, drain/antibiotics",
    "definition" : "Anastomosis preserved, drain/antibiotics / Anastomose bevaret, alene dræn, antibiotika etc"
  },
  {
    "code" : "broken_down",
    "display" : "Anastomosis broken down",
    "definition" : "Anastomosis broken down / Anastopmose nedbrudt"
  },
  {
    "code" : "broken_down_stoma",
    "display" : "Anastomosis broken down, stoma",
    "definition" : "Anastomosis broken down, stoma / Anastopmose nedbrudt, endestomi"
  },
  {
    "code" : "broken_down_reanastomosis",
    "display" : "Anastomosis broken down, re-anastomosis",
    "definition" : "Anastomosis broken down, re-anastomosis / Anastopmose nedbrudt, re-anastomosering"
  }]
}

```
