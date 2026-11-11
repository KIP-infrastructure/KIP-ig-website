# Patobank SNOMED: pTNM klassifikation, pN - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patobank SNOMED: pTNM klassifikation, pN**

## ValueSet: Patobank SNOMED: pTNM klassifikation, pN 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDpTNMpN | *Version*:2.27.2 |
| Active as of 2022-06-08 | *Computable Name*:PatobankSNOMEDpTNMpN |

 
SNOMED koderne relevante pN tillægskoder 

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
  "id" : "PatobankSNOMEDpTNMpN",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDpTNMpN",
  "version" : "2.27.2",
  "name" : "PatobankSNOMEDpTNMpN",
  "title" : "Patobank SNOMED: pTNM klassifikation, pN",
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
  "description" : "SNOMED koderne relevante pN tillægskoder",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PatobankSNOMED",
      "concept" : [{
        "code" : "AEF1900",
        "display" : "pN0 (ÆF1900)"
      },
      {
        "code" : "AEF1910",
        "display" : "pN1 (ÆF1910)"
      },
      {
        "code" : "AEF1920",
        "display" : "pN2 (ÆF1920)"
      },
      {
        "code" : "AEF1930",
        "display" : "pN3 (ÆF1930)"
      },
      {
        "code" : "AEF1931",
        "display" : "pN3a (ÆF1931)"
      },
      {
        "code" : "AEF1932",
        "display" : "pN3b (ÆF1932)"
      },
      {
        "code" : "AEF1950",
        "display" : "pNx (ÆF1950)"
      }]
    }]
  }
}

```
