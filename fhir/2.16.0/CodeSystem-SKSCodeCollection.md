# Sundhedsvæsenets klassifikationssystem (SKS) - Samlinger af koder - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sundhedsvæsenets klassifikationssystem (SKS) - Samlinger af koder**

## CodeSystem: Sundhedsvæsenets klassifikationssystem (SKS) - Samlinger af koder 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SKSCodeCollection | *Version*:2.16.0 |
| Active as of 2022-06-07 | *Computable Name*:SKSCodeCollection |
| *Other Identifiers:*OID:1.2.208.176.2.4 | |

 
Sundhedsvæsenets klassifikationssystem (SKS) - Udvalgte samlinger af koder i RKKP. Link: urn:oid:1.2.208.176.2.4 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DiagnosetypeDPD](ValueSet-DiagnosetypeDPD.md)
* [IDC10DPD](ValueSet-IDC10DPD.md)
* [IDC10DPDCancer](ValueSet-IDC10DPDCancer.md)
* [IDC10DPDNonCancer](ValueSet-IDC10DPDNonCancer.md)

This code system `https://kip.rkkp.dk/fhir/CodeSystem/SKSCodeCollection` provides **a fragment** that includes following codes in an undefined hierarchy:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SKSCodeCollection",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SKSCodeCollection",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:1.2.208.176.2.4"
    }
  ],
  "version" : "2.16.0",
  "name" : "SKSCodeCollection",
  "title" : "Sundhedsvæsenets klassifikationssystem (SKS) - Samlinger af koder",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Sundhedsvæsenets klassifikationssystem (SKS) - Udvalgte samlinger af koder i RKKP. Link: urn:oid:1.2.208.176.2.4",
  "content" : "fragment",
  "concept" : [
    {
      "code" : "cancer_diseases",
      "display" : "Kræft sygdomme",
      "definition" : "Kræft sygdomme",
      "concept" : [
        {
          "code" : "lips_mouth_throat",
          "display" : "Kræft i læber, mundhule og svælg (DC00-DC14)",
          "definition" : "Kræft i læber, mundhule og svælg (DC00-DC14)"
        },
        {
          "code" : "colon_rectum",
          "display" : "Kræft i tyktarm og endetarm (DC18-DC20)",
          "definition" : "Kræft i tyktarm og endetarm (DC18-DC20)"
        },
        {
          "code" : "trachea_bronchi_lung",
          "display" : "Kræft i luftrøret og bronkier og lunge (DC33-DC34)",
          "definition" : "Kræft i luftrøret og bronkier og lunge (DC33-DC34)"
        },
        {
          "code" : "uterus",
          "display" : "Kræft i livmoderen (inkl. uspecifik) (DC54-DC55)",
          "definition" : "Kræft i livmoderen (inkl. uspecifik) (DC54-DC55)"
        },
        {
          "code" : "ovary_fallopian_tube",
          "display" : "Kræft i æggestok og æggeleder (DC56+DC570-DC574)",
          "definition" : "Kræft i æggestok og æggeleder (DC56+DC570-DC574)"
        },
        {
          "code" : "kidney_pelvis_ureter",
          "display" : "Kræft i nyre, nyrebækken og urinleder (DC64-DC66)",
          "definition" : "Kræft i nyre, nyrebækken og urinleder (DC64-DC66)"
        },
        {
          "code" : "central_nervous_system",
          "display" : "Kræft i centralnervesystem (DC70-DC72+DC751-DC753)",
          "definition" : "Kræft i centralnervesystem (DC70-DC72+DC751-DC753)"
        },
        {
          "code" : "non_hodgkin",
          "display" : "Non-hodgkin malignt lymform (DC82-DC85)",
          "definition" : "Non-hodking malignt lymform (DC82-DC85)"
        },
        {
          "code" : "leukemia",
          "display" : "Leukæmi (DC91-DC95)",
          "definition" : "Leukæmi (DC91-DC95)"
        },
        {
          "code" : "mesotel_tissue",
          "display" : "Kræft i mesotel, bindevæv og andet bløddelsvæv (DC45-DC49)",
          "definition" : "Kræft i mesotel, bindevæv og andet bløddelsvæv (DC45-DC49)"
        },
        {
          "code" : "unspecific",
          "display" : "Kræft med dårligt specificerede, sekundære, ikke specificerede og ukendte lokalisationer (DC76-DC80+DD37-DD48)",
          "definition" : "Kræft med dårligt specificerede, sekundære, ikke specificerede og ukendte lokalisationer (DC76-DC80+DD37-DD48)"
        },
        {
          "code" : "other_cancer_diseases",
          "display" : "Ikke-kræft sygdomme",
          "definition" : "Ikke-kræft sygdomme"
        }
      ]
    },
    {
      "code" : "non_cancer_diseases",
      "display" : "Ikke kræft",
      "definition" : "Ikke kræft",
      "concept" : [
        {
          "code" : "heart_vessel",
          "display" : "Hjertekar sygdom (DI00-DI52+DI70-DI99)",
          "definition" : "Hjertekar sygdom (DI00-DI52+DI70-DI99)"
        },
        {
          "code" : "neurological",
          "display" : "Neurologisk sygdom (ikke apopleksi) (DI64-DI69+DG00-DG99+DF00-DF03)",
          "definition" : "Neurologisk sygdom (ikke apopleksi) (DI64-DI69+DG00-DG99+DF00-DF03)"
        },
        {
          "code" : "apoplexia",
          "display" : "Apopleksi (cerebral thrombose/hæmorrhagi) (DI60-DI63)",
          "definition" : "Apopleksi (cerebral thrombose/hæmorrhagi) (DI60-DI63)"
        },
        {
          "code" : "lung",
          "display" : "Lungesygdomme (DJ00-DJ99+DE84)",
          "definition" : "Lungesygdomme (DJ00-DJ99+DE84)"
        },
        {
          "code" : "kidney",
          "display" : "Nyresygdomme (DN00-DN29)",
          "definition" : "Nyresygdomme (DN00-DN29)"
        }
      ]
    }
  ]
}

```
