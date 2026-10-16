# Diagnose (CLL) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Diagnose (CLL)**

## ValueSet: Diagnose (CLL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DiagnoseCLL | *Version*:2.27.0 |
| Active as of 2025-04-06 | *Computable Name*:DiagnoseCLL |

 
Diagnose (CLL) 

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
  "id" : "DiagnoseCLL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DiagnoseCLL",
  "version" : "2.27.0",
  "name" : "DiagnoseCLL",
  "title" : "Diagnose (CLL)",
  "status" : "active",
  "date" : "2025-04-06T00:00:00+02:00",
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
  "description" : "Diagnose (CLL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PatobankSNOMED",
      "concept" : [{
        "code" : "M982333",
        "display" : "CLL"
      },
      {
        "code" : "M96703",
        "display" : "SLL"
      }]
    }]
  }
}

```
