# Knogle forandringer 202412 - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Knogle forandringer 202412**

## ValueSet: Knogle forandringer 202412 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RadiologicalBoneChanges202412 | *Version*:2.27.3 |
| Active as of 2024-11-29 | *Computable Name*:RadiologicalBoneChanges202412 |

 
Radiologiske knogleforandringer 

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
  "id" : "RadiologicalBoneChanges202412",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RadiologicalBoneChanges202412",
  "version" : "2.27.3",
  "name" : "RadiologicalBoneChanges202412",
  "title" : "Knogle forandringer 202412",
  "status" : "active",
  "date" : "2024-11-29T00:00:00+02:00",
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
  "description" : "Radiologiske knogleforandringer",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen knogleforandringer"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/RadiologicalBoneChanges",
      "concept" : [{
        "code" : "few",
        "display" : "Enkelte knogleforandr. i én/enkelte region(er)"
      },
      {
        "code" : "multiple",
        "display" : "Multiple knogleforandr. i én/flere regioner"
      }]
    }]
  }
}

```
