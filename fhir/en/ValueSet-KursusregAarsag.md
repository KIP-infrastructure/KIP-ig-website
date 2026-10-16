# Kursusregistrering - årsag - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kursusregistrering - årsag**

## ValueSet: Kursusregistrering - årsag 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KursusregAarsag | *Version*:2.27.0 |
| Active as of 2024-10-29 | *Computable Name*:KursusregAarsag |

 
Kursusregistrering - årsag til manglende oplysninger 

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
  "id" : "KursusregAarsag",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KursusregAarsag",
  "version" : "2.27.0",
  "name" : "KursusregAarsag",
  "title" : "Kursusregistrering - årsag",
  "status" : "active",
  "date" : "2024-10-29T00:00:00+02:00",
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
  "description" : "Kursusregistrering - årsag til manglende oplysninger",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "not_performed",
        "display" : "Gennemførsel af genoplivningskurser registreres ikke systematisk."
      },
      {
        "code" : "na",
        "display" : "Gennemførsel af genoplivningskurser registreres systematisk, men tallene er ikke umiddelbart tilgængelige, og/eller der er ikke ressourcer til at fremskaffe dem."
      }]
    }]
  }
}

```
