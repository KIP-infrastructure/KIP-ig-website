# SOR: Neurologiske afdelinger (DAP) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: Neurologiske afdelinger (DAP)**

## ValueSet: SOR: Neurologiske afdelinger (DAP) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SORNeurologiskeAfdelingerDAP | *Version*:2.27.2 |
| Active as of 2022-09-06 | *Computable Name*:SORNeurologiskeAfdelingerDAP |

 
SOR: Neurologiske afdelinger (DAP) 

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
  "id" : "SORNeurologiskeAfdelingerDAP",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SORNeurologiskeAfdelingerDAP",
  "version" : "2.27.2",
  "name" : "SORNeurologiskeAfdelingerDAP",
  "title" : "SOR: Neurologiske afdelinger (DAP)",
  "status" : "active",
  "date" : "2022-09-06T00:00:00+02:00",
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
  "description" : "SOR: Neurologiske afdelinger (DAP)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
      "concept" : [{
        "code" : "240121000016005",
        "display" : "Odense, Neurologisk"
      },
      {
        "code" : "253081000016000",
        "display" : "Rigshospitalet , Blegdamsvej, Neurologisk"
      },
      {
        "code" : "275981000016003",
        "display" : "Aalborg, Neurologisk"
      },
      {
        "code" : "440081000016006",
        "display" : "Aarhus, Stroke"
      }]
    }]
  }
}

```
