# Patobank SNOMED: pTNM klassifikation, pT - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patobank SNOMED: pTNM klassifikation, pT**

## ValueSet: Patobank SNOMED: pTNM klassifikation, pT 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDpTNMpT | *Version*:2.27.3 |
| Active as of 2022-06-08 | *Computable Name*:PatobankSNOMEDpTNMpT |

 
SNOMED koderne relevante pT tillægskoder 

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
  "id" : "PatobankSNOMEDpTNMpT",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDpTNMpT",
  "version" : "2.27.3",
  "name" : "PatobankSNOMEDpTNMpT",
  "title" : "Patobank SNOMED: pTNM klassifikation, pT",
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
  "description" : "SNOMED koderne relevante pT tillægskoder",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PatobankSNOMED",
      "concept" : [{
        "code" : "AEF1810",
        "display" : "pTis (ÆF1810)"
      },
      {
        "code" : "AEF1820",
        "display" : "pT0 (ÆF1820)"
      },
      {
        "code" : "AEF1830",
        "display" : "pT1 (ÆF1830)"
      },
      {
        "code" : "AEF1831",
        "display" : "pT1a (ÆF1831)"
      },
      {
        "code" : "AEF1832",
        "display" : "pT1b (ÆF1832)"
      },
      {
        "code" : "AEF1840",
        "display" : "pT2 (ÆF1840)"
      },
      {
        "code" : "AEF1850",
        "display" : "pT3 (ÆF1850)"
      },
      {
        "code" : "AEF1860",
        "display" : "pT4 (ÆF1860)"
      },
      {
        "code" : "AEF1861",
        "display" : "pT4a (ÆF1861)"
      },
      {
        "code" : "AEF1862",
        "display" : "pT4b (ÆF1862)"
      },
      {
        "code" : "AEF1870",
        "display" : "pTx (ÆF1870)"
      }]
    }]
  }
}

```
