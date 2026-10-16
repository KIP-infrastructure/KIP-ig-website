# Splenomegali, udvikling og konstatering - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Splenomegali, udvikling og konstatering**

## ValueSet: Splenomegali, udvikling og konstatering 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Splenomegali | *Version*:2.27.0 |
| Active as of 2022-07-18 | *Computable Name*:Splenomegali |

 
Splenomegali, udvikling og konstatering 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "Splenomegali",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Splenomegali",
  "version" : "2.27.0",
  "name" : "Splenomegali",
  "title" : "Splenomegali, udvikling og konstatering",
  "status" : "active",
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "Splenomegali, udvikling og konstatering",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DetectionMethods",
      "concept" : [{
        "code" : "splenomegaly_radiological",
        "display" : "Ja - radiologisk påvist"
      },
      {
        "code" : "splenomegaly_clinical",
        "display" : "Ja - udelukkende klinisk bedømt"
      },
      {
        "code" : "radiological",
        "display" : "Nej - radiologisk bekræftet"
      },
      {
        "code" : "clinical",
        "display" : "Nej - udelukkende klinisk bedømt"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UNK",
        "display" : "Uoplyst"
      }]
    }]
  }
}

```
