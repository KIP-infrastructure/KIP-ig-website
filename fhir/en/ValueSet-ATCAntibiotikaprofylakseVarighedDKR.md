# ATC - Antibiotikaprofylakse, varighed (DKR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ATC - Antibiotikaprofylakse, varighed (DKR)**

## ValueSet: ATC - Antibiotikaprofylakse, varighed (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ATCAntibiotikaprofylakseVarighedDKR | *Version*:2.27.2 |
| Active as of 2022-10-14 | *Computable Name*:ATCAntibiotikaprofylakseVarighedDKR |

 
ATC - Antibiotikaprofylakse, varighed (DKR) 

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
  "id" : "ATCAntibiotikaprofylakseVarighedDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ATCAntibiotikaprofylakseVarighedDKR",
  "version" : "2.27.2",
  "name" : "ATCAntibiotikaprofylakseVarighedDKR",
  "title" : "ATC - Antibiotikaprofylakse, varighed (DKR)",
  "status" : "active",
  "date" : "2022-10-14T00:00:00+02:00",
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
  "description" : "ATC - Antibiotikaprofylakse, varighed (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Intervals",
      "concept" : [{
        "code" : "=<1",
        "display" : "1 døgn"
      },
      {
        "code" : ">1",
        "display" : "Mere end 1 døgn"
      }]
    }]
  }
}

```
