# Sygdomsområder - HÆMA - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sygdomsområder - HÆMA**

## ValueSet: Sygdomsområder - HÆMA 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SygdomsomraaderHaema | *Version*:2.27.0 |
| Active as of 2023-05-10 | *Computable Name*:SygdomsomraaderHaema |

 
Alle Sygdomsområder i KIP vedr. hæmatologi 

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
  "id" : "SygdomsomraaderHaema",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SygdomsomraaderHaema",
  "version" : "2.27.0",
  "name" : "SygdomsomraaderHaema",
  "title" : "Sygdomsområder - HÆMA",
  "status" : "active",
  "date" : "2023-05-10T00:00:00+02:00",
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
  "description" : "Alle Sygdomsområder i KIP vedr. hæmatologi",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Sygdomsomraader",
      "concept" : [{
        "code" : "ald",
        "display" : "ALD"
      },
      {
        "code" : "cll",
        "display" : "CLL"
      },
      {
        "code" : "damyda",
        "display" : "DAMYDA"
      },
      {
        "code" : "lyfo",
        "display" : "LYFO"
      },
      {
        "code" : "mds",
        "display" : "MDS"
      }]
    }]
  }
}

```
