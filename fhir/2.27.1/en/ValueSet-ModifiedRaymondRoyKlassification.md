# Modified Raymond-Roy klassifikation (MRRC) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modified Raymond-Roy klassifikation (MRRC)**

## ValueSet: Modified Raymond-Roy klassifikation (MRRC) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ModifiedRaymondRoyKlassification | *Version*:2.27.1 |
| Active as of 2022-06-29 | *Computable Name*:ModifiedRaymondRoyKlassification |

 
Modified Raymond-Roy klassifikation (MRRC) 

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
  "id" : "ModifiedRaymondRoyKlassification",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ModifiedRaymondRoyKlassification",
  "version" : "2.27.1",
  "name" : "ModifiedRaymondRoyKlassification",
  "title" : "Modified Raymond-Roy klassifikation (MRRC)",
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
  "description" : "Modified Raymond-Roy klassifikation (MRRC)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/RaymondRoyClassification",
      "concept" : [{
        "code" : "classi",
        "display" : "I, komplet aflukning"
      },
      {
        "code" : "classii",
        "display" : "II, hals rest"
      },
      {
        "code" : "classiiia",
        "display" : "IIIa, rest aneurisme - kontrastopløb centralt i coilpakken"
      },
      {
        "code" : "classiiib",
        "display" : "IIIb, rest aneurisme - kontrastopløb langs aneurismevæggen"
      }]
    }]
  }
}

```
