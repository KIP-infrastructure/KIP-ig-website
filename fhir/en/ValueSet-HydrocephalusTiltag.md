# Tiltag i forbindelse med hydrocephalus - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Tiltag i forbindelse med hydrocephalus**

## ValueSet: Tiltag i forbindelse med hydrocephalus 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HydrocephalusTiltag | *Version*:2.27.0 |
| Active as of 2022-06-29 | *Computable Name*:HydrocephalusTiltag |

 
Tiltag i forbindelse med hydrocephalus 

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
  "id" : "HydrocephalusTiltag",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HydrocephalusTiltag",
  "version" : "2.27.0",
  "name" : "HydrocephalusTiltag",
  "title" : "Tiltag i forbindelse med hydrocephalus",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Tiltag i forbindelse med hydrocephalus",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentInitiatives",
      "concept" : [{
        "code" : "temporarydrain",
        "display" : "Midlertidigt dræn"
      },
      {
        "code" : "permanentshunt",
        "display" : "Kræver permanent shunt"
      }]
    }]
  }
}

```
