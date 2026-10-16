# Patobank SNOMED: pTNM klassifikation, pM - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patobank SNOMED: pTNM klassifikation, pM**

## ValueSet: Patobank SNOMED: pTNM klassifikation, pM 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDpTNMpM | *Version*:2.27.0 |
| Active as of 2022-06-08 | *Computable Name*:PatobankSNOMEDpTNMpM |

 
SNOMED koderne relevante pM tillægskoder 

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
  "id" : "PatobankSNOMEDpTNMpM",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDpTNMpM",
  "version" : "2.27.0",
  "name" : "PatobankSNOMEDpTNMpM",
  "title" : "Patobank SNOMED: pTNM klassifikation, pM",
  "status" : "active",
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "SNOMED koderne relevante pM tillægskoder",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PatobankSNOMED",
      "concept" : [{
        "code" : "AEF2000",
        "display" : "pM0 (ÆF2000)"
      },
      {
        "code" : "AEF2010",
        "display" : "pM1 (ÆF2010)"
      }]
    }]
  }
}

```
