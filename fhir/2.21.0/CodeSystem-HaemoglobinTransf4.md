# HGBTransfusion4 - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HGBTransfusion4**

## CodeSystem: HGBTransfusion4 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HaemoglobinTransf4 | *Version*:2.21.0 |
| Active as of 2022-06-13 | *Computable Name*:HaemoglobinTransf4CS |

 
Hæmoglobinværdi før blodtransfusion 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HaemoglobinTransf4](ValueSet-HaemoglobinTransf4.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HaemoglobinTransf4",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HaemoglobinTransf4",
  "version" : "2.21.0",
  "name" : "HaemoglobinTransf4CS",
  "title" : "HGBTransfusion4",
  "status" : "active",
  "date" : "2022-06-13T00:00:00+02:00",
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
  "description" : "Hæmoglobinværdi før blodtransfusion",
  "content" : "complete",
  "count" : 4,
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
    "code" : "hgb_trfGE56",
    "display" : "=>5,6 mmol/L",
    "definition" : "=>5,6 mmol/L"
  },
  {
    "code" : "hgb_trfGE43",
    "display" : "=>4,3 mmol/L og <5,6 mmol/L",
    "definition" : "=>4,3 mmol/L og <5,6 mmol/L"
  },
  {
    "code" : "hgb_trfLT43",
    "display" : "<4,3 mmol/L",
    "definition" : "<4,3 mmol/L"
  },
  {
    "code" : "hgb_novalue",
    "display" : "Ikke målt",
    "definition" : "Ikke målt"
  }]
}

```
