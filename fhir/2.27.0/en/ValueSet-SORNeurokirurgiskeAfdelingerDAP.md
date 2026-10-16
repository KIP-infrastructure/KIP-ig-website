# SOR: Neurokirurgiske afdelinger (DAP) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: Neurokirurgiske afdelinger (DAP)**

## ValueSet: SOR: Neurokirurgiske afdelinger (DAP) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SORNeurokirurgiskeAfdelingerDAP | *Version*:2.27.0 |
| Active as of 2022-09-06 | *Computable Name*:SORNeurokirurgiskeAfdelingerDAP |

 
SOR: Neurokirurgiske afdelinger (DAP) 

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
  "id" : "SORNeurokirurgiskeAfdelingerDAP",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SORNeurokirurgiskeAfdelingerDAP",
  "version" : "2.27.0",
  "name" : "SORNeurokirurgiskeAfdelingerDAP",
  "title" : "SOR: Neurokirurgiske afdelinger (DAP)",
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
  "description" : "SOR: Neurokirurgiske afdelinger (DAP)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
      "concept" : [{
        "code" : "239981000016003",
        "display" : "OUH, Neurokirurgisk"
      },
      {
        "code" : "252961000016000",
        "display" : "Rigshospitalet , Blegdamsvej, Neurokirurgisk"
      },
      {
        "code" : "276361000016000",
        "display" : "Aalborg, Neurokirurgisk"
      },
      {
        "code" : "440051000016002",
        "display" : "Aarhus, Hjerne- og Rygkirurgi"
      }]
    }]
  }
}

```
