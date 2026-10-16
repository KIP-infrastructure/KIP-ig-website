# Skannings metoder 202412 - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Skannings metoder 202412**

## ValueSet: Skannings metoder 202412 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MedicalScanningTypes202412 | *Version*:2.27.0 |
| Active as of 2022-07-14 | *Computable Name*:MedicalScanningTypes202412 |

 
Forskellige skannings metoder 

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
  "id" : "MedicalScanningTypes202412",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MedicalScanningTypes202412",
  "version" : "2.27.0",
  "name" : "MedicalScanningTypes202412",
  "title" : "Skannings metoder 202412",
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
  "description" : "Forskellige skannings metoder",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalScanningTypes",
      "concept" : [{
        "code" : "scintigraphy",
        "display" : "Knoglescintigrafi"
      },
      {
        "code" : "dexa",
        "display" : "DEXA scanning"
      },
      {
        "code" : "mri",
        "display" : "MR scanning"
      },
      {
        "code" : "pet",
        "display" : "PET-scanning"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden us"
      }]
    }]
  }
}

```
