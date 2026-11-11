# Graft, ACL (DKRR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Graft, ACL (DKRR)**

## ValueSet: Graft, ACL (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/GraftACLDKRR | *Version*:2.27.3 |
| Active as of 2022-09-19 | *Computable Name*:GraftACLDKRR |

 
Graft, ACL (DKRR) 

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
  "id" : "GraftACLDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/GraftACLDKRR",
  "version" : "2.27.3",
  "name" : "GraftACLDKRR",
  "title" : "Graft, ACL (DKRR)",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Graft, ACL (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GraftCruciateLigaments",
      "concept" : [{
        "code" : "acl_repair_synthetic_reinforced",
        "display" : "ACL repair med syntetisk forstærkning"
      },
      {
        "code" : "bach-allo",
        "display" : "BACH-Allo"
      },
      {
        "code" : "bptb",
        "display" : "BPTB"
      },
      {
        "code" : "bptb-allo",
        "display" : "BPTB-Allo"
      },
      {
        "code" : "bqt",
        "display" : "BQT"
      },
      {
        "code" : "bqt-allo",
        "display" : "BQT-Allo"
      },
      {
        "code" : "direct_suture",
        "display" : "Direkte sutur"
      },
      {
        "code" : "double-bundle_bqt",
        "display" : "Double-bundle BQT"
      },
      {
        "code" : "double-bundle_st",
        "display" : "Double-bundle ST"
      },
      {
        "code" : "qt_without_bone_block",
        "display" : "QT uden knogleklods"
      },
      {
        "code" : "st_double",
        "display" : "ST - Double"
      },
      {
        "code" : "st_quadro",
        "display" : "ST - Quadro"
      },
      {
        "code" : "st_triple",
        "display" : "ST - Triple"
      },
      {
        "code" : "st/gr",
        "display" : "ST/GR"
      },
      {
        "code" : "st/gr_allo",
        "display" : "ST/GR allo"
      },
      {
        "code" : "synthetic",
        "display" : "Syntetisk graft"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
