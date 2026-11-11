# Afdelinger til DANDEM - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Afdelinger til DANDEM**

## ValueSet: Afdelinger til DANDEM 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AfdelingDandem | *Version*:2.27.3 |
| Active as of 2023-03-08 | *Computable Name*:AfdelingDandem |

 
Afdelinger til DANDEM 

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
  "id" : "AfdelingDandem",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AfdelingDandem",
  "version" : "2.27.3",
  "name" : "AfdelingDandem",
  "title" : "Afdelinger til DANDEM",
  "status" : "active",
  "date" : "2023-03-08T00:00:00+02:00",
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
  "description" : "Afdelinger til DANDEM",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
      "concept" : [{
        "code" : "253121000016002",
        "display" : "Rigshospitalet, Blegdamsvej (253121000016002)"
      },
      {
        "code" : "911061000016003",
        "display" : "Aalborg UH, Demensenheden (911061000016003)"
      },
      {
        "code" : "275991000016001",
        "display" : "Aalborg UH, Neurologisk (275991000016001)"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden afdeling"
      }]
    }]
  }
}

```
