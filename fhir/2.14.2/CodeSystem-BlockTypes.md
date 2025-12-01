# Typer af blokader - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Typer af blokader**

## CodeSystem: Typer af blokader 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/BlockTypes | *Version*:2.14.2 |
| Active as of 2022-06-09 | *Computable Name*:BlockTypes |

 
Blokader - Central, Underekstremitet, Overekstremitet 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CentralBlockType](ValueSet-CentralBlockType.md)
* [NerveBlockTypeLower](ValueSet-NerveBlockTypeLower.md)
* [NerveBlockTypeOther](ValueSet-NerveBlockTypeOther.md)
* [NerveBlockTypeUpper](ValueSet-NerveBlockTypeUpper.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "BlockTypes",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/BlockTypes",
  "version" : "2.14.2",
  "name" : "BlockTypes",
  "title" : "Typer af blokader",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
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
  "description" : "Blokader - Central, Underekstremitet, Overekstremitet",
  "content" : "complete",
  "count" : 39,
  "concept" : [
    {
      "code" : "central_block_types",
      "display" : "Block given peropratively",
      "definition" : "Blokade anlagt peroperativt",
      "concept" : [
        {
          "code" : "epidural_cervical",
          "display" : "Epidural Cervical",
          "definition" : "Epidural Cervical"
        },
        {
          "code" : "epidural_thorakal",
          "display" : "Epidural Thorakal",
          "definition" : "Epidural Thorakal"
        },
        {
          "code" : "epidural_lumbal",
          "display" : "Epidural Lumbal",
          "definition" : "Epidural Lumbal"
        },
        {
          "code" : "epidural_sakral",
          "display" : "Epidural Sakral",
          "definition" : "Epidural Sakral"
        },
        {
          "code" : "epidural+spinal",
          "display" : "Epidural+Spinal",
          "definition" : "Epidural+Spinal"
        },
        {
          "code" : "spinal_lumbal\"",
          "display" : "Spinal lumbal",
          "definition" : "Spinal lumbal"
        },
        {
          "code" : "spinal_catheter",
          "display" : "Spinal catheter",
          "definition" : "Spinal kateter"
        }
      ]
    },
    {
      "code" : "nerve-block_upper_extr",
      "display" : "Block types upper extremities",
      "definition" : "Type Perifer nerveblokade Overekstremitet",
      "concept" : [
        {
          "code" : "plexus_cervicalis\"",
          "display" : "Plexus cervicalis"
        },
        {
          "code" : "interscalener\"",
          "display" : "Interscalener (Skalener)"
        },
        {
          "code" : "supraclavicular\"",
          "display" : "Supraklavikulær"
        },
        {
          "code" : "infraclavicular\"",
          "display" : "Infraklavikulær"
        },
        {
          "code" : "aksil\"",
          "display" : "Aksil"
        },
        {
          "code" : "suprascapularis\"",
          "display" : "N. Suprascapularis"
        },
        {
          "code" : "axillaris\"",
          "display" : "N. Axillaris"
        },
        {
          "code" : "musculocutaneus\"",
          "display" : "N. Musculocutaneus"
        },
        {
          "code" : "medianus\"",
          "display" : "N. Medianus"
        },
        {
          "code" : "radialis\"",
          "display" : "N. Radialis"
        },
        {
          "code" : "ulnaris\"",
          "display" : "N. Ulnaris"
        }
      ]
    },
    {
      "code" : "nerve-block_lower_extr",
      "display" : "Block types lower extremities",
      "definition" : "Type Perifer nerveblokade Underekstremitet",
      "concept" : [
        {
          "code" : "plexus_lumbalis",
          "display" : "Plexus lumbalis",
          "definition" : "Plexus lumbalis"
        },
        {
          "code" : "plexus_lumbosacralis",
          "display" : "Plexus lumbosacralis",
          "definition" : "Plexus lumbosacralis"
        },
        {
          "code" : "plexus_sacralis",
          "display" : "Plexus sacralis",
          "definition" : "Plexus sacralis"
        },
        {
          "code" : "femoralis",
          "display" : "N. Femoralis",
          "definition" : "N. Femoralis"
        },
        {
          "code" : "cutaneus_femoris_lateralis",
          "display" : "N. Cutaneus femoris lateralis",
          "definition" : "N. Cutaneus femoris lateralis"
        },
        {
          "code" : "saphenus",
          "display" : "N. Saphenus",
          "definition" : "N. Saphenus"
        },
        {
          "code" : "obturatorius",
          "display" : "N. Obturatoriusblock",
          "definition" : "N. Obturatoriusblokade"
        },
        {
          "code" : "ischiadicus_poplitea",
          "display" : "N. Ischiadicus/poplitea block",
          "definition" : "N. Ischiadicus/poplitea blokade"
        },
        {
          "code" : "tibialis",
          "display" : "N. Tibialis",
          "definition" : "N. Tibialis"
        },
        {
          "code" : "peroneus",
          "display" : "Peroneus (communis) block",
          "definition" : "Peroneus (communis) blokade"
        }
      ]
    },
    {
      "code" : "nerve-block_other",
      "display" : "Block types other",
      "definition" : "Type Perifer nerveblokade Trunkal/Abdominal/Øvrige",
      "concept" : [
        {
          "code" : "thorakal_Paravertebral",
          "display" : "Thorakal Paravertebral block",
          "definition" : "Thorakal Paravertebral blokade"
        },
        {
          "code" : "intercostal",
          "display" : "Intercostal block",
          "definition" : "Intercostal blokade"
        },
        {
          "code" : "quadratus_lumborum",
          "display" : "Quadratus lumborum block",
          "definition" : "Quadratus lumborum blokade"
        },
        {
          "code" : "transversus_abdominis",
          "display" : "Transversus abdominis plane (TAP) block",
          "definition" : "Transversus abdominis plane (TAP) blokade"
        },
        {
          "code" : "ilioinguinalis_iliohypogastricus",
          "display" : "Ilioinguinalis/iliohypogastricus",
          "definition" : "Ilioinguinalis/iliohypogastricus"
        },
        {
          "code" : "pectoralis",
          "display" : "N. Pectoralis",
          "definition" : "N. Pectoralis"
        }
      ]
    },
    {
      "code" : "other",
      "display" : "Other block type",
      "definition" : "Anden blokadetype"
    }
  ]
}

```
