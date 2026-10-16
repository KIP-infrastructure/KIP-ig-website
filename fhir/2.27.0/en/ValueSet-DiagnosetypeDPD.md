# Diagnosetype - DPD - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Diagnosetype - DPD**

## ValueSet: Diagnosetype - DPD 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DiagnosetypeDPD | *Version*:2.27.0 |
| Active as of 2022-08-25 | *Computable Name*:DiagnosetypeDPD |

 
Diagnosetype - DPD 

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
  "id" : "DiagnosetypeDPD",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DiagnosetypeDPD",
  "version" : "2.27.0",
  "name" : "DiagnosetypeDPD",
  "title" : "Diagnosetype - DPD",
  "status" : "active",
  "date" : "2022-08-25T00:00:00+02:00",
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
  "description" : "Diagnosetype - DPD",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKSCodeCollection",
      "concept" : [{
        "code" : "cancer_diseases",
        "display" : "Kræft"
      },
      {
        "code" : "non_cancer_diseases",
        "display" : "Ikke-kræft"
      }]
    }]
  }
}

```
