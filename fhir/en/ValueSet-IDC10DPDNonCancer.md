# ICD 10 non-cancer koder til DPD - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ICD 10 non-cancer koder til DPD**

## ValueSet: ICD 10 non-cancer koder til DPD 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IDC10DPDNonCancer | *Version*:2.27.1 |
| Active as of 2022-08-25 | *Computable Name*:IDC10DPDNonCancer |

 
ICD 10 non-cancer koder til DPD 

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
  "id" : "IDC10DPDNonCancer",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IDC10DPDNonCancer",
  "version" : "2.27.1",
  "name" : "IDC10DPDNonCancer",
  "title" : "ICD 10 non-cancer koder til DPD",
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
  "description" : "ICD 10 non-cancer koder til DPD",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKSCodeCollection",
      "concept" : [{
        "code" : "heart_vessel",
        "display" : "Hjertekar sygdom (DI00-DI52+DI70-DI99)"
      },
      {
        "code" : "neurological",
        "display" : "Neurologisk sygdom (ikke apopleksi) (DI64-DI69+DG00-DG99+DF00-DF03)"
      },
      {
        "code" : "apoplexia",
        "display" : "Apopleksi (cerebral thrombose/hæmorrhagi) (DI60-DI63)"
      },
      {
        "code" : "lung",
        "display" : "Lungesygdomme (DJ00-DJ99+DE84)"
      },
      {
        "code" : "kidney",
        "display" : "Nyresygdomme (DN00-DN29)"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden sygdom"
      }]
    }]
  }
}

```
